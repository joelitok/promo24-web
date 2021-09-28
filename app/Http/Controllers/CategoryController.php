<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
public function categories(){
        return view('admin.categoriesList');
}

public function new_category(){
        return view('admin.addCategory');
}


public function post_category(Request $request){ 
$category=new Category();     
$category->category_name = $request->input('category_name');
$category->save();
return redirect('/new_category')->with('status','La  catégorie     '.$category->category_name.'     a été ajouté ');
                                                }


}
