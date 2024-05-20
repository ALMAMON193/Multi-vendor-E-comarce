<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Product\ProductController;




//Brand All route
Route::prefix('product')->group(function(){
     Route::get('/view', [ProductController::class, 'ProductView'])->name('product.view');
     Route::get('/add', [ProductController::class, 'ProductAdd'])->name('product.add');
     Route::post('/store', [ProductController::class, 'ProductStore'])->name('product.store');
      Route::get('/edit/{id}', [ProductController::class, 'ProductEdit'])->name('product.edit');
      Route::post('/update/{id}', [ProductController::class, 'ProductUpdate'])->name('product.update');
      Route::get('/delete/{id}', [ProductController::class, 'ProductDelete'])->name('product.delete');
});







