<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth:admin')->prefix('admin')->group(function (){
   Route::get('/category',[\App\Http\Controllers\CategoryController::class,'create'])->name('create.category');
   Route::post('/category',[\App\Http\Controllers\CategoryController::class,'store'])->name('store.category');
   Route::get('/all-categories',[\App\Http\Controllers\CategoryController::class,'index'])->name('view.category');
   Route::get('/edit-category/{id}',[\App\Http\Controllers\CategoryController::class,'edit']);
   Route::post('/update-category/{id}',[\App\Http\Controllers\CategoryController::class,'update'])->name('update.category');
   Route::get('/delete-category/{id}',[\App\Http\Controllers\CategoryController::class,'destroy'])->name('delete.category');

   //Sub category Routes
    Route::get('/sub-category/create',[\App\Http\Controllers\SubCategoryController::class,'create'])->name('create.subCategory');
    Route::post('/sub-category/store',[\App\Http\Controllers\SubCategoryController::class,'store'])->name('store.sub-category');
    Route::get('/sub-categories',[\App\Http\Controllers\SubCategoryController::class,'index'])->name('view.sub-category');
    Route::get('/edit-sub_category/{id}',[\App\Http\Controllers\SubCategoryController::class,'edit']);
    Route::post('/update-sub_category/{id}',[\App\Http\Controllers\SubCategoryController::class,'update'])->name('update.subCategory');
    Route::get('/delete-sub_category/{id}',[\App\Http\Controllers\SubCategoryController::class,'destroy'])->name('delete.category');

    //Brand Routes

    Route::get('/brands',[\App\Http\Controllers\BrandController::class,'index'])->name('view.brands');
    Route::get('/create-brand',[\App\Http\Controllers\BrandController::class,'create'])->name('create.brand');
    Route::post('/store-brand',[\App\Http\Controllers\BrandController::class,'store'])->name('store.brand');
    Route::get('/edit-brand/{id}',[\App\Http\Controllers\BrandController::class,'edit']);
    Route::post('/update-brand/{id}',[\App\Http\Controllers\BrandController::class,'update'])->name('update.brand');
    Route::get('/delete-brand/{id}',[\App\Http\Controllers\BrandController::class,'destroy'])->name('delete.brand');




});
