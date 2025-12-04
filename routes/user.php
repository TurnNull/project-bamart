<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\ItemsController;
use App\Http\Controllers\user\OrdersController;

// Route::resource('items', ItemsController::class);
Route::get('/item/{item:slug}', [ItemsController::class, 'show'])->name('user.items.show');
// Route::resource('orders', OrdersController::class);