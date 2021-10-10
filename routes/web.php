<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ArticleController;
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

Route::get('/',[HomeController::class, 'index'])->name('home');


Route::group(['namespace' => 'auth'], function() {
    Route::get('dang-ky', 	    [RegisterController::class, 'getRegister'])->name('register');
    Route::post('dang-ky',  	[RegisterController::class, 'postRegister']);

    Route::get('dang-nhap', 	[LoginController::class, 'getlogin'])->name('login');
    Route::post('dang-nhap', 	[LoginController::class, 'postLogin']);

    Route::get('logout', 		[LoginController::class, 'logOut'])->name('logout');


});

Route::get('danh-muc/{slug}-{id}',		 	[CategoryController::class, 'getListProduct'])->name('get.list.Product');
Route::get('san-pham/{slug}-{id}', 			[ProductController::class, 'details'])->name('get.details.product');

//MUA HÀNG
Route::group(['prefix' => 'shopping'], function() {
    Route::get('order/{id}-{price}',        [ShoppingCartController::class, 'order'])->name('shopping.order');
    Route::get('cart',                      [ShoppingCartController::class, 'cart'])->name('shopping.cart');
    Route::get('cart/delete/{id?}',         [ShoppingCartController::class, 'deleteCart'])->name('shopping.cart.delete');
    Route::post('buy',                      [ShoppingCartController::class, 'buy'])->name('shopping.buy');
    Route::get('/history',                  [ShoppingCartController::class, 'history'])->name('shopping.history');
}); 

//ajax
Route::middleware(['auth'])->group(function (){
    Route::group(['prefix' => 'ajax'], function() {
        Route::post('danh-gia/{id}',        [RatingController::class, 'saveRating'])->name('rating.product');
        Route::get('danhgia/',              [RatingController::class, 'danhgia']);
    });

});


//BÀI VIẾT
Route::group(['prefix' => 'bai-viet'], function() {
    Route::get('bai-viet',      [ArticleController::class, 'index'])->name('article');
    Route::get('{slug}-{id}', [ArticleController::class, 'details'])->name('details');
});


