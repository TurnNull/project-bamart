<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('home');
});

Route::get('/item', function () {
    return view('user.pages.items.index');
});
