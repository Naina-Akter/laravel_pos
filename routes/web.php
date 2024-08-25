<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StockController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Route::get('/dashboard',[HomeController::class,'dashboard']);
Route::resources([
    'users' => UserController::class,
    'roles' => RoleController::class,
    'customers' => CustomerController::class,
    'products' => ProductController::class,
    'suppliers' => SupplierController::class,
    'purchases' => PurchaseController::class,
    'orders' => OrderController::class,
    'stocks' => StockController::class
     
]);

Route::get("/roles/delete/{id}",[RoleController::class,"delete"]);
Route::get("/customers/delete/{id}",[CustomerController::class,"delete"]);
Route::get("/products/delete/{id}",[ProductController::class,"delete"]);
Route::get("/suppliers/delete/{id}",[SupplierController::class,"delete"]);
Route::get("/purchases/delete/{id}",[PurchaseController::class,"delete"]);
Route::get("/orders/delete/{id}",[OrderController::class,"delete"]);
Route::get("/stocks/delete/{id}",[StockController::class,"delete"]);



 

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
