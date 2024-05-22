<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Brand\BrandController;
use App\Http\Controllers\Backend\Brand\SubCategoryController;
use App\Http\Controllers\Backend\Brand\CategoryController;
use App\Http\Controllers\Backend\Brand\SubSubCategoryController;



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
    Route::get('/view' , [CategoryController::class, 'AllCategory'])->name('view.category');
    Route::get('/add' , [CategoryController::class, 'AddCategory'])->name('add.category');
    Route::post('/store', [CategoryController::class, 'StoreCategory'])->name('category.store');
    Route::get('/edit/{id}' , [CategoryController::class, 'EditCategory'])->name('category.edit');
    Route::post('/update/{id}' , [CategoryController::class, 'UpdateCategory'])->name('category.update');
    Route::get('/delete/{id}' , [CategoryController::class, 'DeleteCategory'])->name('category.delete');
    Route::get('/subcategory/ajax/{category_id}', [SubCategoryController::class, 'GetSubCategory']);
});

//Brand All subcategory route

Route::prefix('category/subcategory')->group(function(){
    Route::get('/view' , [SubCategoryController::class, 'AllSubCategory'])->name('view.subcategory');
    Route::get('/add' , [SubCategoryController::class, 'AddSubCategory'])->name('add.subcategory');
    Route::post('/store', [SubCategoryController::class, 'StoreSubCategory'])->name('subcategory.store');
    Route::get('/edit/{id}' , [SubCategoryController::class, 'EditSubCategory'])->name('subcategory.edit');
    Route::post('/update/{id}' , [SubCategoryController::class, 'UpdateSubCategory'])->name('subcategory.update');
    Route::get('/delete/{id}' , [SubCategoryController::class, 'DeleteSubCategory'])->name('subcategory.delete');
    Route::get('/ajax/{category_id}', [SubCategoryController::class, 'GetSubCategory']);
    Route::get('/subsubcategory/ajax/{sub_category_id}', [SubCategoryController::class, 'GetSubCategory']);
    
    Route::get('/sub-subcategory/ajax/{sub_category_id}', [SubCategoryController::class, 'GetSubSubCategory']);
});




//Brand All subsubcategory route

Route::prefix('category/subcategory/subsubcategory')->group(function(){
    Route::get('/view' , [SubSubCategoryController::class, 'AllSubSubCategory'])->name('view.subsubcategory');
    Route::get('/add' , [SubSubCategoryController::class, 'AddSubSubCategory'])->name('add.subsubcategory');
    Route::post('/store', [SubSubCategoryController::class, 'StoreSubSubCategory'])->name('subsubcategory.store');
    Route::get('/edit/{id}' , [SubSubCategoryController::class, 'EditSubSubCategory'])->name('subsubcategory.edit');
    Route::post('/update/{id}' , [SubSubCategoryController::class, 'UpdateSubSubCategory'])->name('subsubcategory.update');
    Route::get('/delete/{id}' , [SubSubCategoryController::class, 'DeleteSubSubCategory'])->name('subsubcategory.delete');
    Route::get('/ajax/{sub_category_id}', [SubSubCategoryController::class, 'GetSubSubCategory']);
  
});







