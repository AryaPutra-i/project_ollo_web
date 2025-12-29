<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Login_register.welcome');
});

Route::get('/katalog', function () {
    return view('katalog_portofolio.index');
});

Route::get('/welcome', function () {
    return view('Login_register.welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard_frelancer.dashboard_page');
});
