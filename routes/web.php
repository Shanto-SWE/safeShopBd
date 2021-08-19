<?php

use Illuminate\Support\Facades\Route;
use\App\Http\Controllers\BaseController;
use\App\Http\Controllers\adminController;
use\App\Http\Controllers\CategoryController;
use\App\Http\Controllers\ProductController;
use\App\Http\Controllers\userController;
use\App\Http\Controllers\CartController;
use\App\Http\Controllers\ProductBookingController;

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


Route::get('/',[BaseController::class,'home']);
Route::get('/specialoffer',[BaseController::class,'specialoffer']);
Route::get('/delivery',[BaseController::class,'delivery']);
Route::get('/contact',[BaseController::class,'contact']);

Route::get('/productdetails/{id}',[BaseController::class,'productdetails'])->name('productView');



// user route
Route::get('/user/login',[BaseController::class,'user_login'])->name('user.login');
Route::post('user/login', [Basecontroller::class,'login_check'])->name('loginCheck');
Route::post('user/register', [Basecontroller::class,'user_registration'])->name('user.register');
Route::get('user/logout', [Basecontroller::class,'user_logout'])->name('user.logout');

// cart
Route::group(['middleware'=>'userlogincheck'],function(){
    Route::get('/cart',[BaseController::class,'cart'])->name('cart');
    Route::post('cart/store', [CartController::class,'store'])->name('cart.store');
     Route::get('cart/delete', [CartController::class,'destroy'])->name('cart.delete');
     Route::post('product/booking', [ProductBookingController::class,'store'])->name('product.booking');
     Route::get('product/bookingSuccess', [ProductBookingController::class,'bookingSuccess'])->name('product.bookingSuccess');
     Route::get('product/bookingFail', [ProductBookingController::class,'bookingFail'])->name('product.bookingFail');


});


// admin route

Route::get('/admin/login',[adminController::class,'login'])->name('admin.Login');
Route::post('/admin/login', [adminController::class,'makeLogin'])->name('admin.makeLogin');



Route::group(['middleware'=>'adminlogincheck'],function(){
    Route::get('/admin/deshboard', [adminController::class,'deshboard']);
    Route::get('/admin/logout', [adminController::class,'logout'])->name('admin.logout');

    // category
    Route::get('/categories', [CategoryController::class,'index'])->name('category.list');
    Route::get('/category/add', [CategoryController::class,'create'])->name('category.create');
    Route::post('/category/add', [CategoryController::class,'store'])->name('category.store');
    Route::get('/categories/edit/{id}', [CategoryController::class,'edit'])->name('category.edit');
    Route::post('/categories/edit/{id}', [CategoryController::class,'update'])->name('category.update');
    Route::post('/category/delete', [CategoryController::class,'destroy'])->name('category.delete');
    
    // Products
    Route::get('/products', [ProductController::class,'index'])->name('product.list');
    Route::get('/product/add', [ProductController::class,'create'])->name('product.create');
    Route::post('/product/add', [ProductController::class,'store'])->name('product.store');

    Route::get('/product/edit/{id}', [ProductController::class,'edit'])->name('product.edit');
	Route::post('/product/edit/{id}', [ProductController::class,'update'])->name('product.update');
	Route::post('/product/delete', [ProductController::class,'destroy'])->name('product.delete');
	Route::get('/product/details/{id}', [ProductController::class,'extraDetails'])->name('product.extraDetails');
	Route::post('/product/details/{id}', [ProductController::class,'extraDetailsStore'])->name('product.extraDetailsStore');

    Route::get('/admin/user', [userController::class,'index'])->name('admin.user');
    Route::post('/admin/delete', [userController::class,'delete'])->name('user.delete');
    Route::get('/admin/booking/manage', [ProductBookingController::class,'index'])->name('booking.manage');
    Route::post('booking/products/delete', [ProductBookingController::class,'destroy'])->name('booking.product.delete');
	Route::get('booking/product-status', [ProductBookingController::class,'change_bookingStatus'])->name('booking.product.status');

});