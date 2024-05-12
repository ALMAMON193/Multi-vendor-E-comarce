<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;



Route::middleware('guest:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

   
});

Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['verified'])->name('dashboard');

    Route::get('/profile/view', [AdminProfileController::class, 'View'])->name('view.profile');
    Route::get('/profile/edit', [AdminProfileController::class, 'Edit'])->name('profile.edit');
    Route::POST('/profile/store', [AdminProfileController::class, 'Store'])->name('profile.store');
    Route::patch('/profile/update', [AdminProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [AdminProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});

