<?php

namespace App\Livewire\Orders;

use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Detail extends Component
{
    public $order;
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
        
        // Load order with items by slug
        $this->order = Order::with(['orderItems.item', 'user'])->where('slug', $slug)->first();
        
        if (!$this->order) {
            session()->flash('error', 'Order tidak ditemukan');
            return $this->redirectRoute('orders.history');
        }

        // Check if user owns this order (or it's a guest order from their session)
        if (Auth::check() && $this->order->user_id !== Auth::id() && session('completed_order_id') !== $this->order->order_id) {
            session()->flash('error', 'Anda tidak memiliki akses ke order ini');
            return $this->redirectRoute('orders.history');
        }
    }

    public function render()
    {
        return view('livewire.orders.detail')->layout('user.layouts.orders');
    }
}
