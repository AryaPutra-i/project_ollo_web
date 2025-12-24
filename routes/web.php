<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Login_register.welcome');
});

Route::get('/welcome', function () {
    return view('Login_register.welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard_frelancer.index');
});
