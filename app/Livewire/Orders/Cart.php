<?php

namespace App\Livewire\Orders;

use App\Facades\Cart as FacadesCart;
use App\Services\OrderService;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Cart extends Component
{
    public $cart;
    public $quantities = [];
    public $subtotal = 0;
    public $total = 0;

    public function mount() {
        $this->cart = FacadesCart::get();
        // Initialize quantities for each item (default to 1)
        foreach ($this->cart['items'] as $index => $item) {
            $this->quantities[$item->slug] = 1;
        }
        $this->calculateTotals();
    }

    public function render()
    {
        return view('livewire.orders.cart')->layout('user.pages.orders.cart');
    }

    public function calculateTotals()
    {
        $this->subtotal = 0;
        foreach ($this->cart['items'] as $item) {
            $qty = $this->quantities[$item->slug] ?? 1;
            $this->subtotal += $item->harga * $qty;
        }
        $this->total = $this->subtotal;
    }

    public function updateQuantity($slug, $quantity)
    {
        $this->quantities[$slug] = max(1, $quantity);
        $this->calculateTotals();
    }

    public function incrementQuantity($slug)
    {
        $this->quantities[$slug] = ($this->quantities[$slug] ?? 1) + 1;
        $this->calculateTotals();
    }

    public function decrementQuantity($slug)
    {
        $this->quantities[$slug] = max(1, ($this->quantities[$slug] ?? 1) - 1);
        $this->calculateTotals();
    }

    public function removeItem($slug) {
        FacadesCart::remove($slug);
        unset($this->quantities[$slug]);
        $this->cart = FacadesCart::get();
        $this->calculateTotals();
        $this->dispatch('cart-updated');
        session()->flash('success', 'Item dihapus dari keranjang');
    }

    public function checkout()
    {
        // Check if cart is empty
        if (empty($this->cart['items'])) {
            session()->flash('error', 'Keranjang belanja kosong');
            return;
        }

        \Log::info('Checkout started', ['cart_items_count' => count($this->cart['items'])]);

        try {
            $orderService = new OrderService();
            // Pass user_id (null if guest)
            $userId = Auth::check() ? Auth::id() : null;
            
            \Log::info('Creating order', ['user_id' => $userId]);
            
            $order = $orderService->createOrderFromCart($userId);
            
            \Log::info('Order created successfully', [
                'order_id' => $order->order_id,
                'total_price' => $order->total_price,
                'status' => $order->status
            ]);
            
            // Store order_id in session for payment process
            session()->put('pending_order_id', $order->order_id);
            session()->save(); // Force save session
            
            \Log::info('Session saved', ['pending_order_id' => session('pending_order_id')]);
            
            // Dispatch event to update cart counter
            $this->dispatch('cart-updated');
            
            // Redirect to payment page
            \Log::info('Redirecting to payment page');
            return $this->redirectRoute('order.payment');
        } catch (\Exception $e) {
            session()->flash('error', 'Gagal membuat order: ' . $e->getMessage());
            \Log::error('Checkout Error: ' . $e->getMessage());
            \Log::error($e->getTraceAsString());
        }
    }
}
