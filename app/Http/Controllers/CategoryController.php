<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
public function categories(){
        $categories=Category::get();
        return view('admin.category.categoriesList')->with('categories',$categories);
}

public function new_category(){
        return view('admin.category.addCategory');
}


public function post_category(Request $request){ 
$category=new Category();     
$category->category_name = $request->input('category_name');
$category->save();
return redirect('/new_category')->with('status','La  catégorie     '.$category->category_name.'     a été ajouté ');
                                                }


public function del_category($id){
$category=Category::find($id);
$category->delete();
return redirect('/categories')->with('status','La categorie    '.$category->citegory_name.'       à été supprimé');
                                                                   }

                                               


                                              


}
