<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CatalogueController;
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
Route::get('/client_categories', [ClientController::class, 'categories']);
Route::get('/shop_city/{id}', [ClientController::class, 'shop_city']);
Route::get('/login', [ClientController::class, 'login']);

//ville, catalogue, catalogue et   produits de l   espace administratif

Route::get('/city_c', [ClientController::class, 'city_c']);
Route::get('/category_c',  [ClientController::class, 'category_c']);
Route::get('/catalogue_c', [ClientController::class, 'catalogue_c']);
Route::get('/search/{catalogue_name?}',[ClientController::class, 'search']);


Route::get('/categories_data', [ClientController::class, 'categories_data']);
Route::get('/catalogues_data', [ClientController::class, 'catalogues_data']);

//categories
Route::get('/categories',[CategoryController::class, 'categories']);
Route::get('/new_category',[CategoryController::class, 'new_category']);
Route::post('/post_category',[CategoryController::class, 'post_category']);
Route::get('/del_category/{id}',[CategoryController::class, 'del_category']);


//catalogues
Route::get('/catalogues',[CatalogueController::class, 'catalogues']);
Route::get('/new_catalogue',[CatalogueController::class, 'new_catalogue']);
Route::post('/post_catalogue',[CatalogueController::class, 'post_catalogue']);
Route::get('/del_catalogue/{id}',[CatalogueController::class, 'del_catalogue']);




//admin route
Route::get('/dashboard',[AdminController::class, 'dashboard']);


//cities
Route::get('/cities',[CityController::class, 'cities']);
Route::get('/new_city',[CityController::class, 'new_city']);
Route::post('/post_city',[CityController::class, 'post_city']);
Route::get('/del_city/{id}',[CityController::class, 'del_city']);

//products
//Route::get('/products', [ProductController::class,'products']);
Route::get('/new_product', [ProductController::class,'new_product']);
Route::post('/post_product', [ProductController::class,'post_product']);
Route::get('/list_products',[ProductController::class,'list_products']);
Route::get('/del_product/{id}',[ProductController::class,'del_product']);
Route::get('/edit_product/{id}',[ProductController::class,'edit_product']);
Route::post('/update_product',[ProductController::class,'update_product']);
Route::get('/desactiverproduct/{id}',[ProductController::class,'desactiver_product']);
Route::get('/activerproduct/{id}',[ProductController::class,'activer_product']);
Route::get('/list_promo_products',[ProductController::class,'list_promo_products']);
Route::get('/del_p_product/{id}',[ProductController::class,'del_p_product']);
Route::get('/product_detail/{id}/{category}',[ProductController::class,'product_detail']);


Route::get('/new_product_shop', [ProductController::class,'new_product']);
Route::post('/post_product_shop', [ProductController::class,'post_product']);
Route::get('/list_products_shop',[ProductController::class,'list_products']);
Route::get('/del_product_shop/{id}',[ProductController::class,'del_product']);
Route::get('/edit_product_shop/{id}',[ProductController::class,'edit_product']);
Route::post('/update_product_shop',[ProductController::class,'update_product']);
Route::get('/desactiverproduct_shop/{id}',[ProductController::class,'desactiver_product']);
Route::get('/activerproduct_shop/{id}',[ProductController::class,'activer_product']);
Route::get('/list_promo_products_shop',[ProductController::class,'list_promo_products']);
Route::get('/del_p_product_shop/{id}',[ProductController::class,'del_p_product']);











Route::get('/new_product_promotion', [ProductController::class,'new_product_promotion']);
Route::get('/list_promo_products', [ProductController::class,'list_promo_products']);
Route::post('/p_post_product', [ProductController::class,'post_product_promotion']);




//sliders 
Route::get('/sliders', [SliderController::class,'sliders']);
Route::get('/new_slider', [SliderController::class,'new_slider']);
Route::post('/post_slider', [SliderController::class,'post_slider']);
Route::get('/del_slider/{id}',[SliderController::class,'del_slider']);
Route::get('/activerslider/{id}',[SliderController::class,'active_slider']);
Route::get('/desactiverslider/{id}',[SliderController::class,'desactive_slider']);
//Shop
Route::get('/shops', [ShopController::class,'list_shops']);
Route::get('/new_shop', [ShopController::class,'new_shop']);
Route::post('/post_shop', [ShopController::class,'post_shop']);
Route::get('/del_shop/{id}', [ShopController::class,'del_shop']);






