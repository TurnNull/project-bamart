<?php

namespace App\Livewire\Components;

use App\Models\Items;
use App\Facades\Cart;
use Livewire\Component;

class Checkoutbar extends Component
{
    public $item;
    public $quantity = 1;

    public function mount($slug)
    {
        $this->item = Items::where('slug', $slug)->firstOrFail();
    }

    public function incrementQuantity()
    {
        $this->quantity++;
    }

    public function decrementQuantity()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }

    public function addToCart()
    {
        // Add item to cart with quantity
        for ($i = 0; $i < $this->quantity; $i++) {
            Cart::add($this->item);
        }
        
        // Verify cart has items
        $cartData = Cart::get();
        
        $this->dispatch('cart-updated');
        session()->flash('success', "{$this->quantity} item berhasil ditambahkan ke keranjang (" . count($cartData['items']) . " total items)");
        
        // Redirect to cart page
        return $this->redirect(route('items.cart'), navigate: false);
    }

    public function buyNow()
    {
        // Add to cart first
        for ($i = 0; $i < $this->quantity; $i++) {
            Cart::add($this->item);
        }
        
        $this->dispatch('cart-updated');
        
        // Redirect directly to checkout/payment
        return $this->redirect(route('items.cart'), navigate: false);
    }

    public function getTotalPriceProperty()
    {
        return $this->item->harga * $this->quantity;
    }

    public function render()
    {
        return view('livewire.components.checkoutbar');
    }
}
