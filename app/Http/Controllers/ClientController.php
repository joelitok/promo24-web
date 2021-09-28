<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function home(){
        return view('client.home');
    }
   public function aboutus(){
       return view('client.aboutus');
   }
   public function contact(){
    return view('client.contact');
   }
   public function categories(){
       return view('client.categoriesInc');
   }
}
