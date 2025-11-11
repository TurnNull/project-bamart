<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;

Route::resource('/items', [ItemsController::class]);