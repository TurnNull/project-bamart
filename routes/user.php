<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\ItemsController;
use App\Http\Controllers\user\OrdersController;

Route::resource('items', ItemsController::class);
Route::resource('orders', OrdersController::class);