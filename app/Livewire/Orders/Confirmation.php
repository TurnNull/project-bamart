<?php

namespace App\Livewire\Orders;

use App\Models\Order;
use Livewire\Component;

class Confirmation extends Component
{
    public $order;

    public function mount()
    {
        // Get completed order from session
        $orderId = session('completed_order_id');
        
        \Log::info('Confirmation mount', [
            'session_order_id' => $orderId,
            'all_session' => session()->all()
        ]);
        
        if (!$orderId) {
            \Log::warning('Confirmation - No order ID in session');
            session()->flash('error', 'Order tidak ditemukan. Silakan coba lagi.');
            $this->redirectRoute('items.cart');
            return;
        }

        $this->order = Order::with(['orderItems.item', 'user'])->find($orderId);
        
        \Log::info('Confirmation - Order loaded', ['order' => $this->order ? 'Found' : 'Not found']);
        
        if (!$this->order) {
            \Log::warning('Confirmation - Order not found in database', ['order_id' => $orderId]);
            session()->flash('error', 'Order tidak ditemukan');
            $this->redirectRoute('items.cart');
            return;
        }

        \Log::info('Confirmation - Success', ['order_id' => $this->order->order_id]);
    }

    public function render()
    {
        // If no order loaded, redirect
        if (!$this->order) {
            return $this->redirectRoute('items.cart');
        }
        
        return view('livewire.orders.confirmation')->layout('user.pages.orders.confirmation');
    }

    public function continueShopping()
    {
        return $this->redirectRoute('home-page');
    }
}
