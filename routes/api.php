<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', [App\Http\Controllers\V1\Auth\LoginController::class, 'login']);
Route::post('register', [App\Http\Controllers\V1\Auth\RegisterController::class, 'register']);

Route::resource('kategori', App\Http\Controllers\V1\CategoryController::class);
Route::resource('portofolio', App\Http\Controllers\V1\PortofolioController::class);//->middleware('jwt.verify');
Route::resource('review', App\Http\Controllers\V1\ReviewController::class)->middleware('jwt.verify');
// Route::resource('history', App\Http\Controllers\V1\HistoryController::class);
// Route::resource('akun', App\Http\Controllers\V1\AkunController::class)->middleware('jwt.verify');
Route::resource('order', App\Http\Controllers\V1\OrderController::class);//->middleware('jwt.verify');
Route::resource('price', App\Http\Controllers\V1\PriceController::class);

Route::post('akun/edit', [App\Http\Controllers\V1\AkunController::class, 'edit']);
Route::get('akun/show', [App\Http\Controllers\V1\AkunController::class, 'show']);
Route::get('history', [App\Http\Controllers\V1\HistoryController::class,'index']);
