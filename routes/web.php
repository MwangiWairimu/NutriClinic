<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WelcomePageController;
use App\Http\Controllers\HomeController;

Auth::routes();

Route::get('/', [WelcomePageController::class, 'Welcome'])->name('welcome');

Route::get('/dashboard', function () {
    $user = Auth::user();

    if (!$user) {
        return redirect()->route('login');
    }

    switch ($user->role) {
        case 0:
            return redirect()->route('customer.home');
        case 1:
            return redirect()->route('admin.home');
        default:
            return redirect()->route('login');
    }
})->name('dashboard');

Route::middleware('admin')->group(function () {
    Route::get('/admin/home', [HomeController::class, 'admin'])->name('admin.home');
});

Route::middleware('user')->group(function () {
    Route::get('/customer/home', [HomeController::class, 'customer'])->name('customer.home');
});


