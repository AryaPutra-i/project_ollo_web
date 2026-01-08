<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\portofolioController;


Route::get('/', function () {
    return view('Login_register.welcome');
})->name('welcome');

Route::get('/login', function () {
    return view('Login_register.login');
})->name('login');

Route::get('/dashboard/posts/show', function () {
    // $porto = portofolio::find('id');
    return view('dashboard_frelancer.posts.show');
});

Route::get('/dashboard/posts/checkSlug', [portofolioController::class, 'checkSlug']);
Route::resource('/dashboard/posts', portofolioController::class);


Route::get('/katalog', [portofolioController::class, 'viewWrapper'])->name('katalog');




