<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('home');
});

Route::get('/item', function () {
    return view('user.pages.items.index');
});

Route::get('/order/cart', function () {
    return view('user.pages.orders.cart');
});

Route::get('/order/checkout', function () {
    return view('user.pages.orders.checkout');
});

Route::get('/order/payment', function () {
    return view('user.pages.orders.payment');
});

Route::get('/order/confirmation', function () {
    return view('user.pages.orders.confirmation');
});