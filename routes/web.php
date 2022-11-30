<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/search',[ProductController::class, 'index']);

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/login', function () {
    return view('/auth/login');
});

Route::get('/register', function () {
    return view('/auth/register');

});
Route::get('used-car', [CarController::class, 'usedCar']);

Route::get('/rental-car', [CarController::class, 'rentalCar']);

Route::get('/parallel',  [CarController::class, 'parallel']);

Route::get('/commercial-vehicle',  [CarController::class, 'commercial']);

Route::get('/accessories-car',  [CarController::class, 'accessories']);

Route::get('/motorcycles',[CarController::class, 'motorCycles']);

Route::prefix('auth')->group(function() {
    Route::post('login', [LoginController::class, 'login']);
});

Route::get('info', [UserController::class, 'info']);
Route::get('about', [UserController::class, 'about']);
Route::get('review', [UserController::class, 'review']);
Route::get('coin', [UserController::class, 'coin']);
Route::get('balance', [UserController::class, 'balance']);
Route::get('caroubiz', [UserController::class, 'caroubiz']);
Route::get('edit-profile', [UserController::class, 'editProfile']);
Route::get('change-password', [UserController::class, 'changePassword']);
Route::get('setting-notification', [UserController::class, 'setNotification']);
Route::get('data-privacy', [UserController::class, 'dataPrivacy']);
Route::get('settings', [UserController::class, 'settings']);

Route::get('purchase-progress', [UserController::class, 'purchaseProgress']);
Route::get('purchase-completed', [UserController::class, 'purchaseCompleted']);
Route::get('purchase-returns', [UserController::class, 'purchaseReturns']);
Route::get('purchase-cancelled', [UserController::class, 'purchaseCancelled']);

Route::get('sales-start', [UserController::class, 'salesStart']);
Route::get('sales-progress', [UserController::class, 'salesProgress']);
Route::get('sales-completed', [UserController::class, 'salesCompleted']);
Route::get('sales-returns', [UserController::class, 'salesReturns']);
Route::get('sales-cancelled', [UserController::class, 'salesCancelled']);

Route::get('sell', [UserController::class, 'sell']);
