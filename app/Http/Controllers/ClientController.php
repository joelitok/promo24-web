<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\City;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Shop;
class ClientController extends Controller
{
    //
    public function home(){
        $categories=Category::get();
        $shops=Shop::get();
        $cities=City::get();
        $products=Product::where('product_status', 1)->get();
        $sliders=Slider::where('slider_status', 1)->get();
        return view('client.home')
        ->with('categories',$categories)
        ->with('cities',$cities)
        ->with('products',$products)
        ->with('sliders',$sliders)
        ->with('shops',$shops);
    }
   public function aboutus(){
    $categories=Category::get();
    $shops=Shop::get();
    return view('client.aboutus')
    ->with('shops',$shops)->with('categories', $categories);
   }
   public function contact(){
    $categories=Category::get();
    $shops=Shop::get();
    return view('client.contact')
    ->with('shops',$shops)->with('categories',$categories);
   }


   public function categories(){
    $categories=Category::get();   
    $shops=Shop::get();
       return view('client.client_categories')
       ->with('shops',$shops)->with('categories',$categories);
   }

}
