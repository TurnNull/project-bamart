<?php

// use App\Http\Controllers\HomePageController;

use App\Http\Controllers\user\ItemsController;
use App\Livewire\HomeComponent;
use App\Livewire\Orders\Cart;
use App\Livewire\Orders\History;
use App\Livewire\Orders\Payment;
use App\Livewire\Orders\Confirmation;
use App\Livewire\Orders\Detail;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeComponent::class)->name('home-page');

Route::get('/item/{item:slug}', [ItemsController::class, 'show'])->name('items.show');

Route::get('/cart', Cart::class)->name('items.cart');

Route::get('/cart/clear', function () {
    // Force clear session completely
    session()->forget('cart');
    session()->flash('success', 'Keranjang berhasil dikosongkan');
    return redirect()->route('home-page');
})->name('cart.clear');

Route::get('/order/checkout', function () {
    return view('user.pages.orders.checkout');
});

Route::get('/order/payment', Payment::class)->name('order.payment');

Route::get('/order/confirmation', Confirmation::class)->name('order.confirmation');

Route::middleware('auth')->group(function () {
    Route::get('/orders/history', History::class)->name('orders.history');
    Route::get('/orders/{slug}', Detail::class)->name('orders.detail');
});

Route::get('/order/confirmation-old', function () {
    return view('user.pages.orders.confirmation');
});