<?php

namespace App\Livewire\Components;

use App\Facades\Cart;
use Livewire\Component;
use Livewire\Attributes\On;

class ProductCart extends Component
{
    public  $cartTotal = 0;

    public function mount() {
        $this->updateCartTotal();
    }

    public function render()
    {
        return view('livewire.components.product-cart');
    }

    #[On('cart-updated')]
    public function updateCartTotal() {
        $this->cartTotal = count(Cart::get()['items']);
    }
}
