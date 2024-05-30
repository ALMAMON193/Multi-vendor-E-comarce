<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Product\ProductController;






//product All route
Route::prefix('product')->group(function(){
     Route::get('/manage', [ProductController::class, 'ProductView'])->name('product.manage');
     Route::get('/add', [ProductController::class, 'ProductAdd'])->name('product.add');
     Route::post('/store', [ProductController::class, 'ProductStore'])->name('product.store');
      Route::get('/edit/{id}', [ProductController::class, 'ProductEdit'])->name('product.edit');
      Route::post('/update/product', [ProductController::class, 'ProductUpdate'])->name('product.update');
      Route::post('/update/multi-image', [ProductController::class, 'ProductUpdateMultiImage'])->name('update.product.multi_image');
      Route::get('/delete/{id}', [ProductController::class, 'ProductDelete'])->name('product.delete');
});







