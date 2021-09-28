<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ShopController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/


///client route
Route::get('/', [ClientController::class, 'home']);
Route::get('/aboutus', [ClientController::class, 'aboutus']);
Route::get('/contact', [ClientController::class, 'contact']);
Route::get('/categoriesInC', [ClientController::class, 'categories']);



//categories
Route::get('/categories',[CategoryController::class, 'categories']);
Route::get('/new_category',[CategoryController::class, 'new_category']);
Route::post('/post_category',[CategoryController::class, 'post_category']);




//admin route
Route::get('/dashboard',[AdminController::class, 'dashboard']);


//cities
Route::get('/cities',[CityController::class, 'cities']);
Route::get('/new_city',[CityController::class, 'new_city']);
Route::post('/post_city',[CityController::class, 'post_city']);




//products
Route::get('/products', [ProductController::class,'products']);
Route::get('/products_promo', [ProductController::class,'products_promotions']);
Route::get('/new_product', [ProductController::class,'new_product']);
Route::post('/post_product', [ProductController::class,'post_product']);
Route::get('/list_products',[ProductController::class,'list_products']);


//sliders 
Route::get('/sliders', [SliderController::class,'sliders']);



//Shop
Route::get('/shop', [ShopController::class,'shop']);






