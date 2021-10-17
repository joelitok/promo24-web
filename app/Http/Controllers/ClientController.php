<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\City;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Shop;
use App\Models\Order;
class ClientController extends Controller
{
    //
    public function home(){
        $categories=Category::orderBy('id','DESC')->get();
        $shops=Shop::orderBy('id','DESC')->get();
        $cities=City::orderBy('id','DESC')->get();
        $products=Product::where('product_status', 1)->orderBy('id','DESC')->get();
        $sliders=Slider::where('slider_status', 1)->orderBy('id','DESC')->get();

        return view('client.home')
        ->with('categories',$categories)
        ->with('cities',$cities)
        ->with('products',$products)
        ->with('sliders',$sliders)
        ->with('shops',$shops);
    }

 public function  shop_city($id){
        $shop=Shop::where('id',$id)->first();
        $products=Product::where('product_shop', $shop->shop_name)->orderBy('id','DESC')->get();
        $cities=City::orderBy('id','DESC')->get();
        $categories=Category::orderBy('id','DESC')->get();
        $sliders=Slider::where('slider_status', 1)->orderBy('id','DESC')->limit(1)->get();
        $shops=Shop::orderBy('id','DESC')->get();

        return view('client.home')
        ->with('categories',$categories)
        ->with('cities',$cities)
        ->with('products',$products)
        ->with('sliders',$sliders)
        ->with('shops',$shops);
    }





   public function aboutus(){
    $categories=Category::orderBy('id','DESC')->get();
    $shops=Shop::orderBy('id','DESC')->get();
    return view('client.aboutus')
    ->with('shops',$shops)->with('categories', $categories);
   }
   public function contact(){
    $categories=Category::orderBy('id','DESC')->get();
    $shops=Shop::orderBy('id','DESC')->get();
    return view('client.contact')
    ->with('shops',$shops)->with('categories',$categories);
   }


   public function categories(){
    $categories=Category::orderBy('id','DESC')->get();   
    $shops=Shop::orderBy('id','DESC')->get();
       return view('client.client_categories')
       ->with('shops',$shops)->with('categories',$categories);
   }

   public function login(){
       return view('auth.login');
   }


  

    








}
