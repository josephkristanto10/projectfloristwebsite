<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HhomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CartController;

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

Route::resource('/', HhomeController::class);
Route::get('/variants_detail', [HhomeController::class, "detail_variant"]);
Route::post('/addtocart', [HhomeController::class, "addtocart"]);
Route::resource('/masuk', LoginController::class);
Route::post('/logincheck', [LoginController::class,"checklogin"]);
Route::post('/register', [LoginController::class,"register"]);


Route::get('/keluar', [LoginController::class,"logout"]);
Route::resource('/cart', CartController::class);
Route::post('/deletecart', [CartController::class,"deletecart"]);
// Route::get('/listcart', [CartController::class,"listcart"]);
Route::get('/product', function () {
    return view('product');
});
Route::get('/howtoorder', function () {
    return view('howtoorder');
});
Route::get('/contact', function () {
    return view('contact');
});