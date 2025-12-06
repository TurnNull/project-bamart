<?php

// use App\Http\Controllers\HomePageController;
use App\Livewire\HomeComponent;
use App\Livewire\Orders\Cart;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeComponent::class)->name('home-page');

Route::get('/item', function () {
    return view('user.pages.items.index');
});

Route::get('/cart', Cart::class)->name('items.cart'); 

Route::get('/order/checkout', function () {
    return view('user.pages.orders.checkout');
});

Route::get('/order/payment', function () {
    return view('user.pages.orders.payment');
});

Route::get('/order/confirmation', function () {
    return view('user.pages.orders.confirmation');
});