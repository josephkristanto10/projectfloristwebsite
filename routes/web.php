<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HhomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\AdminController;

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
Route::resource('/adminsite', AdminController::class);
Route::resource('/masuk', LoginController::class);
Route::resource('/cart', CartController::class);
Route::resource('/invoice-list', InvoiceController::class);

Route::post('/addtocart', [HhomeController::class, "addtocart"]);
Route::get('/variants_detail', [HhomeController::class, "detail_variant"]);
Route::get('/pagination/fetch_data_index',  [HhomeController::class,"fetch_data"]);


Route::get('/keluar', [LoginController::class,"logout"]);
Route::post('/logincheck', [LoginController::class,"checklogin"]);
Route::post('/register', [LoginController::class,"register"]);

Route::get('/pagination/fetch_data_invoice',  [InvoiceController::class,"fetch_data"]);
Route::get('/invoice-detail', [InvoiceController::class,"getInvoiceDetail"]);


Route::post('/deletecart', [CartController::class,"deletecart"]);
Route::post('/checkout', [CartController::class,"checkout"]);

Route::post("/loginadmin", [AdminController::class,"loginadmincheck"]);

Route::get("/getlistkategory", [AdminController::class,"getlistcategory"]);
Route::get("/pagelistcategory", [AdminController::class,"listcategory"]);
Route::get("/getdetailcategoryadmin", [AdminController::class,"getdetailcategoryadmin"]);
Route::POST("/editcategoryadmin", [AdminController::class,"editcategoryadmin"]);
Route::POST("/changestatuscategory", [AdminController::class,"changestatuscategory"]);


Route::get("/getlistproduk", [AdminController::class,"getlistproduk"]);
Route::get("/pagelistproduk", [AdminController::class,"listproduk"]);
Route::get("/getlistuser", [AdminController::class,"getlistuser"]);
Route::get("/pagelistuser", [AdminController::class,"listuser"]);
Route::get("/getlisttrx", [AdminController::class,"getlisttrx"]);
Route::get("/pagelisttrx", [AdminController::class,"listtrx"]);
Route::get("/getdetailtrx", [AdminController::class,"getInvoiceDetailAdmin"]);
Route::get("/getdetailproductadmin", [AdminController::class,"getdetailproductadmin"]);
Route::POST("/editproductadmin", [AdminController::class,"editproductadmin"]);
Route::POST("/editstockallvariantsadmin", [AdminController::class,"editstockallvariantsadmin"])->name("edit_stock_variant_massal_admin");
Route::POST("/editproductpervariantsadmin", [AdminController::class,"editproductvariantsadmin"]);
Route::POST("/edit_gambarvariant", [AdminController::class,"edit_gambarvariant"]);

Route::get("/getlistvariant", [AdminController::class,"getlistvariant"]);
Route::get("/pagelistvariant", [AdminController::class,"listvariant"]);
Route::get("/getdetailvariantproductadmin", [AdminController::class,"getdetailvariantproductadmin"]);
Route::POST("/editproductvariantadmin", [AdminController::class,"editproductvariantadmin"]);
Route::POST("/addproductadmin", [AdminController::class,"addproductadmin"]);
Route::POST("/addcategoryadmin", [AdminController::class,"addcategoryadmin"]);
Route::POST("/addvariantproductadmin", [AdminController::class,"addvariantproductadmin"]);
Route::POST("/changestatusvariant", [AdminController::class,"changestatusvariant"]);
Route::POST("/changestatusproduct", [AdminController::class,"changestatusproduct"]);
Route::POST("/changestatusdeletevariant", [AdminController::class,"changestatusdeletevariants"]);
Route::POST("/changestatusdeleteproduct", [AdminController::class,"changestatusdeleteproducts"]);

Route::POST("/tambahgambarvariant", [AdminController::class,"tambahgambarvariant"]);
Route::POST("/edit_tambahgambarvariant", [AdminController::class,"edit_tambahgambarvariant"]);

Route::POST("/addproductwithvariantadmin", [AdminController::class,"addproductwithvariantadmin"]);
Route::POST("/edit_addproductwithvariantadmin", [AdminController::class,"edit_addproductwithvariantadmin"]);
Route::POST("/updategambarvariant", [AdminController::class,"updategambarvariants"]);
Route::POST("/edit_updategambarvariants", [AdminController::class,"edit_updategambarvariants"]);




Route::get('/product', function () {
    return view('product');
});
Route::get('/howtoorder', function () {
    return view('howtoorder');
});
Route::get('/contact', function () {
    return view('contact');
});