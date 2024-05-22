<?php

use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/home',function(){
    return view('home');
})->name('home');

Route::get('/order/customer',function(){
    return view('order/customer');
})->name('order.customer');

Route::get('/order/employee',function(){
    return view('order/employee');
})->name('order.employee');

Route::get('/home/order-status/employee',
    [OrderController::class, 'status_view'])
    ->name('order_status.employee');
