<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Login_register.welcome');
});

Route::get('/welcome', function () {
    return view('Login_register.welcome');
});

Route::get('/login', function () {
    return view('Login_register.login');
})->name('login.show');


Route::get('/', function () {
    return view('katalog_portofolio.index');
});

Route::get('/index', function () {
    return view('katalog_portofolio.index');
});
