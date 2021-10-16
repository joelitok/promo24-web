<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AdminController extends Controller
{
    //
    public function dashboard(){
        $categories=Category::orderBy('id', 'DESC')->get();
        return view('admin.dashboard')->with('categories', $categories);
    }
}
