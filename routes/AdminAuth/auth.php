<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function (){
    Route::middleware('guest:admin')->group(function (){
        Route::get('/login',[\App\Http\Controllers\AdminAuth\AuthenticatedSessionController::class,'create'])->name('login');
        Route::post('/login',[\App\Http\Controllers\AdminAuth\AuthenticatedSessionController::class,'store'])->name('auth');
        Route::get('/register',[\App\Http\Controllers\AdminAuth\RegisteredAdminController::class,'create'])->name('register');
        Route::post('/register',[\App\Http\Controllers\AdminAuth\RegisteredAdminController::class,'store'])->name('store');
    });

    Route::middleware('auth:admin')->group(function (){

    });
});
