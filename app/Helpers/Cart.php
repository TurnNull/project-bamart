<?php

namespace App\Helpers;

use App\Models\Items;

class Cart
{
    public function __construct()
    {
        if (!request()->session()->has('cart')) {
            $this->set($this->empty());
        }
    }

    public function set($cart)
    {
        request()->session()->put('cart', $cart);
    }

    public function get()
    {
        return request()->session()->get('cart');
    }

    public function empty()
    {
        return [
            'items' => [],
        ];
    }

    public function add(Items $item)
    {
        $cart = $this->get();
        array_push($cart['items'], $item);
        $this->set($cart);
    }

    public function remove($slug)
    {
        $cart = $this->get();
        array_splice(
            $cart['items'],
            array_search(
                $slug,
                array_column(
                    $cart['items'],
                    'slug'
                )
            ),
            1
        );
        $this->set($cart);
    }

    public function clear()
    {
        $this->set($this->empty());
    }
}
