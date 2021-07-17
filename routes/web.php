<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

//HTTP 403
Route::get('/403', function () {return view('errors.403');})->name('403');
//HTTP 404
Route::get('/404', function () {return view('errors.404');})->name('404');
//HTTP 500
Route::get('/500', function () {return view('errors.500');})->name('500');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', function() {
        Auth::logout();
        redirect('/');
    })->name('logout');
});

Route::group(['middleware' => ['auth', 'verified', 'status:1']], function () {
    
    //Route Admin dan Arsitek
    Route::group(['middleware' => ['auth', 'role:1,2']], function () {
        Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::resource('/order', App\Http\Controllers\OrderController::class);
        Route::resource('/review', App\Http\Controllers\ReviewController::class);
        Route::resource('/portofolio', App\Http\Controllers\PortofolioController::class);
    });

    //Route Arsitek
    Route::group(['middleware' => ['auth', 'role:2']], function () {
    Route::resource('/price', App\Http\Controllers\PriceController::class);
    Route::resource('/progres', App\Http\Controllers\ProgresController::class);
    });

    //Route Admin
    Route::group(['middleware' => ['auth', 'role:1']], function () {
        Route::resource('/home', App\Http\Controllers\HomeController::class, ['only' => ['edit', 'update']]);
        Route::resource('/category-type', App\Http\Controllers\CategoryTypeController::class);
        Route::resource('/category-model', App\Http\Controllers\CategoryModelController::class);
        Route::resource('/client', App\Http\Controllers\ClientController::class, ['except' => ['create', 'store']]);
        Route::resource('/arsitek', App\Http\Controllers\ArsitekController::class, ['except' => ['create', 'store']]);
        Route::resource('/account-setting', App\Http\Controllers\AccountSettingController::class);
    });

});