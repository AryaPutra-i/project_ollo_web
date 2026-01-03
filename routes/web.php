<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\portofolioController;
use App\Models\portofolio;



Route::get('/', function () {
    return view('Login_register.welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard_frelancer.dashboard_page');
});


Route::get('/dashboard/posts/checkSlug', [portofolioController::class, 'checkSlug']);
Route::get('/dashboard/posts', [portofolioController::class, 'index'])->name('dashboard.posts.index');
Route::get('/dashboard/posts/create', [portofolioController::class, 'create'])->name('dashboard.posts.create');
Route::post('/dashboard/posts/store', [portofolioController::class, 'store'])->name('dashboard.posts.store');
// Route::resource('/dashboard/posts', portofolioController::class);


Route::get('/katalog', function () {
    return view('katalog_portofolio.index');
});

Route::get('/welcome', function () {
    return view('Login_register.welcome');
});


