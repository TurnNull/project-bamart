<?php

use Illuminate\Support\Facades\Route;

Route::resource('/', function() {
    return view('home');
});
