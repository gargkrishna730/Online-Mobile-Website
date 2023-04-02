<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StripeController;
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


/**
 * Home Routes
 */



Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/detail/{slug}', [FrontendController::class, 'detail'])->name('detail');
Route::get('search', [FrontendController::class, 'search'])->name('search');
Route::get('/admin', [AdminController::class, 'show'])->name('admin.show');
Route::post('/admin', [AdminController::class, 'login'])->name('admin.login');
Route::get('/contact-us',[FrontendController::class,'contactus'])->name('contactus');
Route::group(['middleware' => ['admin']], function () {
    /**
     * Logout Routes
     */
    Route::resource('/admin/catalog/product', ProductController::class);
    Route::post('/admin/catalog/product/upload', [ProductController::class, 'upload'])->name('product.upload');
    Route::post('/admin/catalog/product/remove', [ProductController::class, 'remove'])->name('product.remove');
    Route::resource('/admin/catalog/category', CategoryController::class);
    Route::get('/admin/sales/listing', [AdminController::class, 'orderlist'])->name('sales.listing');
    Route::get('/admin/sales/editorder/{id}', [AdminController::class, 'editorder'])->name('edit.order');
    Route::post('/admin/sales/updateorder/{id}', [AdminController::class, 'updateorder'])->name('update.order');
    Route::get('/admin/sales/orderdetails/{id}', [AdminController::class, 'orderdetails'])->name('order.details');
    Route::get('/admin/invoice/{id}', [AdminController::class, 'invoice'])->name('admin.invoice');
    Route::get('/admin/customer/listing', [AdminController::class, 'customerlist'])->name('customer.list');
});
Route::group(['middleware' => ['guest']], function () {
    /**
     * Register Routes
     */
    Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');

    /**
     * Login Routes
     */
    Route::get('/login', [LoginController::class, 'show'])->name('login.show');
    Route::post('/login', [LoginController::class, 'login'])->name('login.perform');
});

Route::group(['middleware' => ['auth']], function () {
    /**
     * Logout Routes
     */
    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
    Route::resource('cart', CartController::class);
    Route::resource('orders', OrderController::class);
    Route::get('checkout', [UserController::class, 'checkout'])->name('checkout');
    Route::group(['middleware' => ['stripe']], function () {
        /**
         * Logout Routes
         */
        Route::get('stripe', [StripeController::class, 'view']);
        Route::post('stripe', [StripeController::class, 'post'])->name('stripe.post');
    });
    //Route::post('buynow', [UserController::class,'buynow'])->name('buynow');
});
Route::get('test', function () {
    return view('admin.catalog.test');
});
