<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Category;
use App\Models\City;

class ShopController extends Controller
{
    //
   
public function shop_list(){
    return view('admin.shop.shopList');
}
public function post_shop(Request $request){
    
    $shop=new Shop();  
    $cities=City::orderBy('id','DESC')->get();   
    $shop->shop_name = $request->input('shop_name');
    $shop->shop_description = $request->input('shop_description');
    $shop->shop_city_name = $request->input('shop_city_name');
    $shop->save();
    return redirect('/new_shop')->with('cities', $cities)->with('status','La   Boutiques   '.$shop->shop_name.'   a été ajouté ');
      
}


public function new_shop(){
    $cities=City::orderBy('id','DESC')->get();
    return view('admin.shop.addShop')->with('cities', $cities);
}

public function list_shops(){
    $shops=Shop::orderBy('id','DESC')->get();
    return view('admin.shop.shopList')->with('shops', $shops);
}

public function del_shop($id){
    $shop=Shop::find($id);
    $shop->delete();
    return redirect('/shops')
    ->with('status','La boutique    '.$shop->shop_name.'   a été supprimé ');
     }






















}
