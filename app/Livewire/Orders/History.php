<?php

namespace App\Livewire\Orders;

use App\Models\Order;
use App\Services\OrderService;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class History extends Component
{
    use WithPagination;

    public function mount()
    {
        // Link any completed guest orders to this user
        $completedOrderId = session('completed_order_id');
        if ($completedOrderId) {
            $this->linkGuestOrderToUser($completedOrderId);
        }
    }

    public function render()
    {
        // Show orders owned by this user OR recent guest orders from session
        $ordersQuery = Order::where(function($query) {
            $query->where('user_id', Auth::id());
            
            // Include recent completed guest order if in session
            $completedOrderId = session('completed_order_id');
            if ($completedOrderId) {
                $query->orWhere('order_id', $completedOrderId);
            }
        })
        ->with(['orderItems.item'])
        ->orderBy('created_at', 'desc')
        ->paginate(10);

        return view('livewire.orders.history', [
            'orders' => $ordersQuery
        ])->layout('user.pages.orders.history');
    }

    private function linkGuestOrderToUser($orderId)
    {
        try {
            $order = Order::find($orderId);
            
            if ($order && $order->user_id === null) {
                $order->update(['user_id' => Auth::id()]);
                \Log::info('Guest order linked to user', [
                    'order_id' => $orderId,
                    'user_id' => Auth::id()
                ]);
            }
        } catch (\Exception $e) {
            \Log::error('Failed to link guest order: ' . $e->getMessage());
        }
    }

    public function cancelOrder($orderId)
    {
        try {
            \Log::info('Cancelling order', ['order_id' => $orderId]);
            
            $order = Order::find($orderId);
            
            if (!$order) {
                session()->flash('error', 'Order tidak ditemukan');
                return;
            }
            
            if (!$order->canBeCancelled()) {
                session()->flash('error', 'Order tidak dapat dibatalkan. Status: ' . $order->status);
                return;
            }
            
            $orderService = new OrderService();
            $orderService->cancelOrder($orderId);
            
            \Log::info('Order cancelled successfully', ['order_id' => $orderId]);
            
            session()->flash('success', 'Order berhasil dibatalkan');
            
            // Refresh the page to update the list
            $this->redirect(route('orders.history'));
        } catch (\Exception $e) {
            \Log::error('Cancel order error: ' . $e->getMessage());
            session()->flash('error', 'Gagal membatalkan order: ' . $e->getMessage());
        }
    }
}
