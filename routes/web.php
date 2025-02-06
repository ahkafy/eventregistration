<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminAuthenticate;

Auth::routes();

Route::get('/', [EventController::class, 'index'])->name('index');


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/imgg', [HomeController::class, 'img'])->name('img');
Route::get('/sms', [HomeController::class, 'sms_send'])->name('sms');
Route::get('/registration/ju', [EventController::class, 'juRegistration'])->name('register.ju');
Route::get('/registration/alumni', [EventController::class, 'alumniRegistration'])->name('register.alumni');
Route::get('/registration/others', [EventController::class, 'otherRegistration'])->name('register.other');


Route::get('/payment/bkash', [PaymentController::class, 'payment'])->name('url-pay');
Route::post('/payment/bkash/create', [PaymentController::class, 'createPayment'])->name('url-create');
Route::get('/payment/bkash/callback', [PaymentController::class, 'callback'])->name('url-callback');


Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);

Route::prefix('admin')->middleware(AdminAuthenticate::class)->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/participants', [AdminController::class, 'participants'])->name('admin.participants');
    Route::get('/transactions', [AdminController::class, 'transactions'])->name('admin.transactions');
    // Add more admin routes here
});
