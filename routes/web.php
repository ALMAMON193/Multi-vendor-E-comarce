<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd\IndexController;

Route::get('/', function () {
    return view('front-end.home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/' , [IndexController::class, 'index'])->name('home');
Route::get('/user-logout/' , [IndexController::class, 'Logout'])->name('user.logout');
Route::get('/user-profile/' , [IndexController::class, 'Profile'])->name('user.profile');
Route::post('/user-profile-update/{id}' , [IndexController::class, 'ProfileUpdate'])->name('user.profile.update');
Route::get('/user-password-change/' , [IndexController::class, 'PasswordChange'])->name('user.password.change');
Route::get('/user-password-update/' , [IndexController::class, 'PasswordUpdate'])->name('user.password.update');



require __DIR__.'/auth.php';
require __DIR__.'/brands.php';
require __DIR__.'/admin-auth.php';
