<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\City;
use App\Models\Product;
use App\Models\Slider;
class ClientController extends Controller
{
    //
    public function home(){
        $categories=Category::get();
        $cities=City::get();
        $products=Product::where('product_status', 1)->get();
        $sliders=Slider::where('slider_status', 1)->get();
        return view('client.home')
        ->with('categories',$categories)
        ->with('cities',$cities)
        ->with('products',$products)
        ->with('sliders',$sliders);
    }
   public function aboutus(){
       return view('client.aboutus');
   }
   public function contact(){
    return view('client.contact');
   }
   public function categories(){
       return view('client.client_categories');
   }
}
