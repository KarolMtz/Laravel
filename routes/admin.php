<?php

use Illuminate\Support\Facades\Route;

Route::get('/users', function () {
    return "Admin Users";
})->name('users');

Route::get('/products', function () {
    return "Admin Products";
})->name('products');
