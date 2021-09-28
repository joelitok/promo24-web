<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
   public function products(){
        return view('admin.productsList');
    }
    public function products_promotions(){
        return view('admin.promotionProductsList');
    }

    public function new_product(){
        return view('admin.addProduct');
    }

    public function post_product(Request $request){ 

        $this->validate($request,
        ['product_name'=>'required',
        'product_description'=>'required',
        'product_price'=>'required',
        'product_shop'=>'required',
        'product_category'=>'required',
        'product_city'=>'required',
        'product_image'=>'image| nullable|max:1999'
    ]);


        if($request->hasFile('product_image')){
            //1 get file name with extension
        
            $fileNameWithExt=$request->file('product_image')->getClientOriginalName();
            //2 file name without extension
        
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        
            //3 get extension
            $extension=$request->file('product_image')->getClientOriginalExtension();
        
            //4 renamane image to store
            $fileNameToStore=$fileName.'_'.time().''.$extension;
        
            $path =$request->file('product_image')->storeAs('public/product_images',
            $fileNameToStore);
        
        }else{
         $fileNameToStore = 'noimage.jpg';
        }
        $product=new Product();     
        $product->product_name = $request->input('product_name');
        $product->product_description = $request->input('product_description');
        $product->product_price = $request->input('product_price');
        $product->product_shop = $request->input('product_shop');
        $product->product_category = $request->input('product_category');
        $product->product_city = $request->input('product_city');
        $product->product_status =1;
        $product->product_image = $fileNameToStore;
        $product->save();
        return redirect('/new_product')->with('status', 'Le   produit  ' .$product->product_name.'     a été ajouté');
}










public function list_products(){
    $products=Product::get();
    return view('admin.productsList')->with('products',$products);
}




}