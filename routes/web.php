<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CheckoutController;


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


/*
Route::get('/', function () {
    return view('welcome');
});


Route::match(['get','post'],'welcome1' , function () {
    return view('welcome');
});

*/

/*
//use App\Http\Controllers\HomeController;
//Route::get ('about/{user}',[HomeController::class,'index']);

//Route::get ('/about', [HomeController::class, 'index']);
*/



//pass parameter and validation
//Route::get ('about/{id}/{name}/{phone?}','App\Http\Controllers\Admin\HomeController@index1')->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+','phone' => '[0-9]+']);


//Route::get ('about','App\Http\Controllers\Admin\HomeController@index2')->name('name-route-chk');


/*

Route::prefix('supplier')->group(function(){

    Route::get ('home','App\Http\Controllers\Admin\HomeController@home')->name('home-route-chk');
    Route::get ('about','App\Http\Controllers\Admin\HomeController@about')->name('about-route-chk');
    Route::get ('product','App\Http\Controllers\Admin\HomeController@product')->name('product-route-chk');

});

*/
/*
Route::prefix('supplier')->group(function(){

    Route::get ('home','App\Http\Controllers\Admin\HomeController@home')->name('home-route-chk');
    Route::get ('about','App\Http\Controllers\Admin\HomeController@about')->name('about-route-chk');
    Route::get ('product','App\Http\Controllers\Admin\HomeController@product')->name('product-route-chk');

});




Route::group(['prefix'=>'supplier','namespace'=>'App\Http\Controllers\Admin'],function(){

    Route::get ('home','HomeController@home')->name('home-route-chk');
    Route::get ('about','HomeController@about')->name('about-route-chk');
    Route::get ('product','HomeController@product')->name('product-route-chk');  

});

*/

/*

Route::group(['prefix'=>'supplier','namespace'=>'App\Http\Controllers\Admin'],function(){

    Route::get ('home/{index}/{role}','HomeController@home')->name('home-route-chk');
    Route::get ('about','HomeController@about')->name('about-route-chk');
    Route::get ('product','HomeController@product')->name('product-route-chk');  

});


*/


//e-store route start

Route::get ('/', [HomeController::class, 'index']);
Route::get ('contact-us', [HomeController::class, 'contactUs']);
Route::get ('products', [ProductsController::class, 'productList']);
Route::get ('products-details/{category}/{product-title}/{id}', [ProductsController::class, 'productDetails']);
Route::get ('cart', [CartController::class, 'CartView']);
Route::get ('account', [ProfileController::class, 'accountView']);
Route::get ('wishlist', [WishlistController::class, 'wishlistView']);
Route::get ('login', [LoginController::class, 'login']);
Route::get ('checkout', [CheckoutController::class, 'checkoutView']);


