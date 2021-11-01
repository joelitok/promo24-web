<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\City;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Shop;
use App\Models\Order;
use App\Models\Catalogue;
class ClientController extends Controller
{
    //

public function categories_data(Request $request){
$data = Category::where('id_city_category', $request->id)->get();
return response()->json($data);
}

public function  category_c(){
    $categories=Category::orderBy('id','DESC')->paginate(6);
    $cities =City::orderBy('id','DESC')->get();
    $shops=Shop::orderBy('id','DESC')->get();
    $catalogues=Catalogue::orderBy('id','DESC')->get();

    return view('client.category')->with('catalogues',$catalogues)
    ->with('cities', $cities)->with('categories', $categories)->with('shops', $shops);
}


public function  catalogue_c(){
    $categories=Category::orderBy('id','DESC')->get();
    $cities =City::orderBy('id','DESC')->get();
    $shops=Shop::orderBy('id','DESC')->get();
    $catalogues=Catalogue::orderBy('id','DESC')->paginate(8);

    return view('client.catalogue')->with('catalogues',$catalogues)
    ->with('cities', $cities)->with('categories', $categories)->with('shops', $shops);
}


public function  city_c(){
    $categories=Category::orderBy('id','DESC')->get();
    $cities =City::orderBy('id','DESC')->paginate(6);
    $shops=Shop::orderBy('id','DESC')->get();
    $catalogues=Catalogue::orderBy('id','DESC')->get();

    return  view('client.city')->with('catalogues',$catalogues)
    ->with('cities', $cities)->with('categories', $categories)->with('shops', $shops);
}



    public function catalogues_data(Request $request){
    $data = Catalogue::where('id_category_catalogue', $request->id)->get();
    return response()->json($data);
    }

    public function home(){
        $categories=Category::orderBy('id','DESC')->get();
        $shops=Shop::orderBy('id','DESC')->get();
        $cities=City::orderBy('id','DESC')->get();
        $products=Product::where('product_status', 1)->orderBy('id','DESC')->paginate(6);
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







public function search( Request $request, $catalogue_name=null){


 $categories=Category::orderBy('id','DESC')->get();
$cities =City::orderBy('id','DESC')->paginate(6);
$shops=Shop::orderBy('id','DESC')->get();
$catalogues=Catalogue::orderBy('id','DESC')
->where('catalogue_name', $catalogue_name)->get();
            //end
         $search=$request->get('search'); 
               // dd($search);
         $products = Product::where('product_name','like','%'.$search.'%')
        ->orWhere('product_description','like','%'.$search.'%')
        ->orWhere('product_category','like','%'.$search.'%')->orderBy('id','DESC')->paginate(8);
   
    return  view('client.search')->with('catalogues',$catalogues)
    ->with('cities', $cities)->with('categories', $categories)
    ->with('shops', $shops)->with('products', $products);
     }         


  

    








}
