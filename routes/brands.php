<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BrandController;


//Brand All route
Route::prefix('brand')->group(function(){
    Route::get('/all' , [BrandController::class, 'AllBrand'])->name('all.brand');
    Route::get('/add' , [BrandController::class, 'AddBrand'])->name('add.brand');
    Route::post('/store' , [BrandController::class, 'StoreBrand'])->name('brand.store');
    Route::get('/edit/{id}' , [BrandController::class, 'EditBrand'])->name('brand.edit');
    Route::post('/update/{id}' , [BrandController::class, 'UpdateBrand'])->name('brand.update');
    Route::get('/delete/{id}' , [BrandController::class, 'DeleteBrand'])->name('brand.delete');
});


