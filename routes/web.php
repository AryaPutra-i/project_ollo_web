<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\portofolioController;
use App\Http\Controllers\userfrelancerController;
use App\Http\Controllers\BookingController;


Route::get('/', function () {
    return view('Login_register.welcome');
})->name('welcome');


route::post('/register/authenticate', [userfrelancerController::class, 'authenticate'])->name('loginPost');
route::get('/register/showLogin', [userfrelancerController::class, 'showLogin'])->name('login');
route::get('/register/dashboardAdmin', [userfrelancerController::class, 'viewDashboardAdmin'])->name('admin');
route::get('/register/verifikasiUser', [userfrelancerController::class, 'viewVerfikasiUser'])->name('verifikasi');
route::post('/register/approve/{id}', [userfrelancerController::class, 'approve'])->name('freelancer.approve');
route::post('/register/reject/{id}', [userfrelancerController::class, 'reject'])->name('freelancer.reject');
route::post('/logout', [userfrelancerController::class, 'logout'])->name('logout');
route::resource('/register', userfrelancerController::class);

Route::get('/dashboard/posts/show', function () {
    // $porto = portofolio::find('id');
    return view('dashboard_frelancer.posts.show');
});

Route::get('/booking/index', [BookingController::class, 'index'])->name('booking.index');
Route::resource('/booking', BookingController::class);

Route::get('/dashboard/posts/checkSlug', [portofolioController::class, 'checkSlug']);
Route::middleware(['auth'])->group(function () {
    Route::resource('/dashboard/posts', portofolioController::class);
});

Route::get('/katalog', [portofolioController::class, 'viewWrapper'])->name('katalog');
