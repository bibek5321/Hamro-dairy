<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/cart', function () {
    return view('frontend.cart');
});

Route::get('/login', function () {
    return view('frontend.login');
});

Route::get('/products', function () {
    return view('frontend.products');
});

Route::get('/register', function () {return view('frontend.register');});

Route::get('/special-offers', function () {return view('frontend.special-offers');});