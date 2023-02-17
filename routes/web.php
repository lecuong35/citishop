<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\KindController;
use App\Http\Controllers\Admin\OrderStatusController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\PostStatusController;
use App\Http\Controllers\Admin\ProductStatusController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
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

Route::get('/home/{kind_id?}/{category_id?}', [SaleController::class, 'getList'])->name('home');

Route::prefix('/user') ->group(function () {
    Route::post('/login', [UserController::class, 'login']);
    Route::get('/login', function() {
        return view('auth/login');
    })->name('user.login');
    Route::post('/register', [UserController::class, 'register']);
    Route::get('/register', function() {
        return view('auth/register');
    });

    Route::get('/forget-password', [UserController::class, 'forget']);
    Route::post('/forget-password', [UserController::class, 'getPassword']);

    Route::prefix('/edit')->group(function() {
        Route::get('/password', [UserController::class, 'editPassword']);
        Route::post('/password', [UserController::class, 'changePassword']);

        Route::get('/profile', [UserController::class, 'editInfo']);
        Route::post('/profile', [UserController::class, 'updateInfo']);
    });
    Route::post('/sale', [SaleController::class, 'store']);
    Route::post('/sale/{id}', [SaleController::class, 'update']);
    Route::post('/sale/{id}/delete', [SaleController::class, 'destroy']);
    Route::get('/sale',[SaleController::class, 'index'])->name('user.sale');
    Route::get('/sale/completed',[SaleController::class, 'completed'])->name('user.sale.completed');
    Route::get('/sale/returned',[SaleController::class, 'returned'])->name('user.sale.returned');
    Route::get('/other-sale/{id}',[SaleController::class, 'showOtherPosts']);
    Route::get('/sale/{id}',[SaleController::class, 'edit']);
    Route::get('/sale/detail/{id}',[SaleController::class, 'detail']);
    // Route::get('/test', [UserController::class, 'uploadFile']);
    // Route::post('/test', [UserController::class, 'test']);

    Route::get('/bill', [BillController::class, 'index'])->name('bill.index');
    Route::get('/bill/completed', [BillController::class, 'getCompleted']);
    Route::get('/bill/returned', [BillController::class, 'getReturned']);
    Route::get('/bill/cancelled', [BillController::class, 'getCancelled'])->name('bill.cancelled');
    Route::get('/bill/revenue-statistic', [BillController::class, 'getSales']);
    Route::post('/bill', [BillController::class, 'store']);
    Route::post('bill/{id}/confirm', [BillController::class, 'confirm']);
    Route::post('bill/{id}/delete', [BillController::class, 'destroy']);
    Route::post('bill/{id}/returned', [BillController::class, 'returned']);
    Route::post('bill/{id}/completed', [BillController::class, 'completed']);

    Route::get('/my-bill/completed', [BillController::class, 'getCustomerBillCompleted']);
    Route::get('/my-bill', [BillController::class, 'getCustomerBill']);
    Route::get('/my-bill/cancelled', [BillController::class, 'getCustomerBillCancelled'])->name('my-bill.cancelled');
    Route::post('/my-bill/{id}/delete', [BillController::class, 'destroyMyBill']);
});

Route::prefix('/admin')->group(function() {
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/login', function() {
        return view('admin/login');
    })->name('admin.login');

    Route::post('/kind/{id}', [KindController::class, 'update']);
    Route::resource('kind', KindController::class);

    Route::post('/brand/{id}', [BrandController::class, 'update']);
    Route::resource('brand', BrandController::class);

    Route::post('/category/{id}', [CategoryController::class, 'update']);
    Route::resource('category', CategoryController::class);

    Route::post('/post-status/{id}', [PostStatusController::class, 'update']);
    Route::resource('post-status', PostStatusController::class); 
    
    Route::post('/product-status/{id}', [ProductStatusController::class, 'update']);
    Route::resource('product-status', ProductStatusController::class);

    Route::post('/order-status/{id}', [OrderStatusController::class, 'update']);
    Route::resource('order-status', OrderStatusController::class);

    Route::get('/post', [PostController::class, 'show'])->name('admin.post');
    Route::post('/post/{id}/confirm', [PostController::class, 'confirm']);
    Route::post('/post/{id}/delete', [PostController::class, 'delete']);
});

// Route::get('/search',[ProductController::class, 'index']);

// Route::get('/detail', function () {
//     return view('detail');
// });

// Route::get('/login', function () {
//     return view('/auth/login');
// });
// Route::post('/login', [UserController::class, 'login'] );

// Route::get('/register', function () {
//     return view('/auth/register');

// });
// Route::post('/register', [UserController::class, 'register']);
// Route::get('used-car', [CarController::class, 'usedCar']);

// Route::get('/rental-car', [CarController::class, 'rentalCar']);

// Route::get('/parallel',  [CarController::class, 'parallel']);

// Route::get('/commercial-vehicle',  [CarController::class, 'commercial']);

// Route::get('/accessories-car',  [CarController::class, 'accessories']);

// Route::get('/motorcycles',[CarController::class, 'motorCycles']);

// Route::prefix('auth')->group(function() {
//     Route::post('login', [LoginController::class, 'login']);
// });

// Route::get('info', function() {
//     return view('users.user-info');
// });
// Route::get('about', [UserController::class, 'about']);
// Route::get('review', [UserController::class, 'review']);
// Route::get('coin', [UserController::class, 'coin']);
// Route::get('balance', [UserController::class, 'balance']);
// Route::get('caroubiz', [UserController::class, 'caroubiz']);
// Route::get('edit-profile', [UserController::class, 'editProfile']);
// Route::get('change-password', [UserController::class, 'changePassword']);
// Route::get('setting-notification', [UserController::class, 'setNotification']);
// Route::get('data-privacy', [UserController::class, 'dataPrivacy']);
// Route::get('settings', [UserController::class, 'settings']);

// Route::get('purchase-progress', [UserController::class, 'purchaseProgress']);
// Route::get('purchase-completed', [UserController::class, 'purchaseCompleted']);
// Route::get('purchase-returns', [UserController::class, 'purchaseReturns']);
// Route::get('purchase-cancelled', [UserController::class, 'purchaseCancelled']);

// Route::get('sales-start', [UserController::class, 'salesStart']);
// Route::get('sales-progress', [UserController::class, 'salesProgress']);
// Route::get('sales-completed', [UserController::class, 'salesCompleted']);
// Route::get('sales-returns', [UserController::class, 'salesReturns']);
// Route::get('sales-cancelled', [UserController::class, 'salesCancelled']);

Route::get('sell', [UserController::class, 'sell']);

// Route::get('test', [UserController::class, 'uploadFile']);
// Route::post('test', [UserController::class, 'test']);
