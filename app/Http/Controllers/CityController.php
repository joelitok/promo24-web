<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    //

public function cities(){
    $cities=City::orderBy('id', 'DESC')->get();
    return view('admin.city.cityList')->with('cities', $cities);
}


public function new_city(){
    return view('admin.city.addCity');
}


public function post_city(Request $request){ 
    $city=new City();     
    $city->city_name = $request->input('city_name');
    $city->save();
    return redirect('new_city')->with('status','La ville     '.$city->city_name.'       à été ajouté');
    
                                            }

public function del_city($id){
              $city=City::find($id);
              $city->delete();
              return redirect('/cities')->with('status','La ville     '.$city->city_name.'       à été supprimé');
                         }

    
}
