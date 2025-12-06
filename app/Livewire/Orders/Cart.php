<?php

namespace App\Livewire\Orders;

use App\Facades\Cart as FacadesCart;
use Livewire\Component;

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
}
