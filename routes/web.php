<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('home');
});


Route::get('/search', function () {
    return view('searchPage');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/login', function () {
    return view('/auth/login');
});

Route::get('/register', function () {
    return view('/auth/register');

});
Route::get('/used-car', function () {
    return view('used-car');
});

Route::get('/rental-car', function () {
    return view('rental-car');
});

Route::get('/parallel', function () {
    return view('parallel');
});

Route::get('/commercial-vehicle', function () {
    return view('commercial-vehicle');
});

Route::get('/accessories-car', function () {
    return view('accessories-car');
});

Route::get('/motorcycles', function () {
    return view('motorcycles');
});

Route::prefix('auth')->group(function() {
    Route::post('login', [LoginController::class, 'login']);
});
