<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Brand\BrandController;
use App\Http\Controllers\Backend\Brand\SubCategoryController;
use App\Http\Controllers\Backend\Brand\BrandCategoryController;



//Brand All route
Route::prefix('brand')->group(function(){
    Route::get('/view' , [BrandController::class, 'AllBrand'])->name('view.brand');
    Route::get('/add' , [BrandController::class, 'AddBrand'])->name('add.brand');
    Route::post('/store' , [BrandController::class, 'StoreBrand'])->name('brand.store');
    Route::get('/edit/{id}' , [BrandController::class, 'EditBrand'])->name('brand.edit');
    Route::post('/update/{id}' , [BrandController::class, 'UpdateBrand'])->name('brand.update');
    Route::get('/delete/{id}' , [BrandController::class, 'DeleteBrand'])->name('brand.delete');
});

//Brand All category route

Route::prefix('category')->group(function(){
    Route::get('/view' , [BrandCategoryController::class, 'AllCategory'])->name('view.category');
    Route::get('/add' , [BrandCategoryController::class, 'AddCategory'])->name('add.category');
    Route::post('/store', [BrandCategoryController::class, 'StoreCategory'])->name('category.store');
    Route::get('/edit/{id}' , [BrandCategoryController::class, 'EditCategory'])->name('category.edit');
    Route::post('/update/{id}' , [BrandCategoryController::class, 'UpdateCategory'])->name('category.update');
    Route::get('/delete/{id}' , [BrandCategoryController::class, 'DeleteCategory'])->name('category.delete');
});

//Brand All subcategory route

Route::prefix('subcategory')->group(function(){
    Route::get('/view' , [SubCategoryController::class, 'AllSubCategory'])->name('view.subcategory');
    Route::get('/add' , [SubCategoryController::class, 'AddSubCategory'])->name('add.subcategory');
    Route::post('/store', [SubCategoryController::class, 'StoreSubCategory'])->name('subcategory.store');
    Route::get('/edit/{id}' , [SubCategoryController::class, 'EditSubCategory'])->name('subcategory.edit');
    Route::post('/update/{id}' , [SubCategoryController::class, 'UpdateSubCategory'])->name('subcategory.update');
    Route::get('/delete/{id}' , [SubCategoryController::class, 'DeleteSubCategory'])->name('subcategory.delete');
});

//Brand All subsubcategory route





