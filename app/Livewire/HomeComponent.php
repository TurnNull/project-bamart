<?php

namespace App\Livewire;

use App\Models\Items;
use Livewire\Component;
use App\Facades\Cart;

class HomeComponent extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'items' => Items::latest()->paginate(10)
        ])->layout('user.layouts.app');
    }

    public function addToCart($slug) {
        $item = Items::where('slug', $slug)->first();
        
        if (!$item) {
            session()->flash('error', 'Item tidak ditemukan');
            return;
        }
        
        Cart::add($item);
        $this->dispatch('cart-updated');
        session()->flash('success', 'Item ditambahkan ke keranjang');
    }
}
