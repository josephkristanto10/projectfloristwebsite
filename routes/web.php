<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HhomeController;

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

Route::resource('/home', HhomeController::class);
Route::get('/variants_detail', [HhomeController::class, "detail_variant"]);
Route::get('/product', function () {
    return view('product');
});
Route::get('/howtoorder', function () {
    return view('howtoorder');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/masuk', function () {
    return view('login');
});