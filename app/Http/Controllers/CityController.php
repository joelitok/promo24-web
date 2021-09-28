<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    //

public function cities(){
    return view('admin.cityList');
}


public function new_city(){
    return view('admin.addCity');
}


public function post_city(Request $request){ 
    $city=new City();     
    $city->city_name = $request->input('city_name');
    $city->save();
    return redirect('new_city')->with('status','La ville     '.$city->city_name.'       à été ajouté');
    
                                            }

    
}
