<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\FrontEnd\IndexController;

Route::get('/', function () {
    return view('front-end.home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
  
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//     Route::get('logout', [ProfileController::class, 'destroy'])
//     ->name('logout');


// });
Route::get('/' , [IndexController::class, 'index'])->name('home');
Route::get('/user-logout/' , [IndexController::class, 'Logout'])->name('user.logout');
Route::get('/user-profile/' , [IndexController::class, 'Profile'])->name('user.profile');
Route::post('/user-profile-update/{id}' , [IndexController::class, 'ProfileUpdate'])->name('user.profile.update');
Route::get('/user-password-change/' , [IndexController::class, 'PasswordChange'])->name('user.password.change');
Route::get('/user-password-update/' , [IndexController::class, 'PasswordUpdate'])->name('user.password.update');

//Brand all route
//Brand All route
Route::prefix('brand')->group(function(){
    Route::get('/all' , [BrandController::class, 'AllBrand'])->name('all.brand');
    Route::get('/add' , [BrandController::class, 'AddBrand'])->name('add.brand');
    Route::post('/store' , [BrandController::class, 'StoreBrand'])->name('brand.store');
    Route::get('/edit/{id}' , [BrandController::class, 'EditBrand'])->name('brand.edit');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin-auth.php';
