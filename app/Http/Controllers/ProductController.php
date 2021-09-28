<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductPromo;
use App\Models\Category;
use App\Models\City;
use App\Models\Shop;
use Storage;

class ProductController extends Controller
{
    //

    public function new_product_promotion(){
        $categories=Category::get();
        $cities=City::get();
        $shops=Shop::get();
        return view('admin.product.promotionAddProduct')
        ->with('categories',$categories)
        ->with('cities', $cities)
        ->with('shops',$shops);
    }

    public function new_product(){
        $categories=Category::get();
        $cities=City::get();
        $shops=Shop::get();
        
        return view('admin.product.addProduct')
        ->with('categories',$categories)
        ->with('cities', $cities)
        ->with('shops',$shops);
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
        return redirect('/new_product')->with('status', 'Le   produit  ' 
        .$product->product_name.'     a été ajouté');
}

public function list_products(){
    $products=Product::get();
    return view('admin.product.productsList')->with('products',$products);
}

public function del_product($id){
    $product=Product::find($id);
    if($product->product_image!='noimage.jpg'){
        Storage::delete('public/product_images/'.$product->image);
    }
    $product->delete();
    return redirect('/list_products')->with('status', 
    'le produit '.$product->product_name.' a été supprimer avec succès');
}



public function update_product(Request $request){

    $product = Product::find($request->input('id'));
    $product->product_name = $request->input('product_name');
    $product->product_description = $request->input('product_description');
    $product->product_price = $request->input('product_price');
    $product->product_shop = $request->input('product_shop');
    $product->product_category = $request->input('product_category');
    $product->product_city = $request->input('product_city');
    $product->product_status =1;
    
    
        $this->validate($request,
        [
            'product_name'=>'required',
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
    
        if($product->product_image!='noimage.jpg'){
            Storage::delete('public/product_images/'.$product->image);
        }
        $product->product_image=$fileNameToStore;
    
    }
    $product->update();
    return redirect('/list_products')->with('status', 'le produit '.$product->product_name.' a été modifier avec succès');
}

public function edit_product($id){

    $product=Product::find($id);
    $categories=Category::get();
    $cities =City::get();
    $shops=Shop::get();
    return view('admin.product.editProduct')->with('product', $product)
    ->with('categories',$categories)->with('cities',$cities)->with('shops',$shops);

}



public function desactiver_product($id){
    $product=Product::find($id);
    $product->product_status=0;
    $product->update();
    return redirect('/list_products')->with('status', 'le produit '.$product->product_name.' a ete desactiver avec succes');

}

public function activer_product($id){
    $product=Product::find($id);
    $product->product_status=1;
    $product->update();
    return redirect('/list_products')->with('status', 'le produit '.$product->product_name.' a ete dactiver avec succes');

}
























public function del_p_product($id){

    $p_product=ProductPromo::find($id);
    if($p_product->p_product_image!='noimage.jpg'){
        Storage::delete('public/product_images/'.$p_product->p_product_image);
    }
    $p_product->delete();
    return redirect('/list_promo_products')->with('status', 
    'le produit '.$p_product->p_product_name.' a été supprimer avec succès');
}





public function list_promo_products(){
    $p_products=ProductPromo::get();
    return view('admin.product.promotionProductsList')->with('p_products',$p_products);
}

public function post_product_promotion(Request $request){ 
    $this->validate($request,
    ['p_product_name'=>'required',
    'p_product_description'=>'required',
    'p_product_price'=>'required',
    'p_product_shop'=>'required',
    'p_product_category'=>'required',
    'p_product_city'=>'required',
    'p_product_image'=>'image| nullable|max:1999'
]);

    if($request->hasFile('p_product_image')){
        //1 get file name with extension
    
        $fileNameWithExt=$request->file('p_product_image')->getClientOriginalName();
        //2 file name without extension
    
        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
    
        //3 get extension
        $extension=$request->file('p_product_image')->getClientOriginalExtension();
    
        //4 renamane image to store
        $fileNameToStore=$fileName.'_'.time().''.$extension;
    
        $path =$request->file('p_product_image')->storeAs('public/product_images',
        $fileNameToStore);
    
    }else{
     $fileNameToStore = 'noimage.jpg';
    }
    $productPromo=new ProductPromo();     
    $productPromo->p_product_name = $request->input('p_product_name');
    $productPromo->p_product_description = $request->input('p_product_description');
    $productPromo->p_product_price = $request->input('p_product_price');
    $productPromo->p_product_shop = $request->input('p_product_shop');
    $productPromo->p_product_category = $request->input('p_product_category');
    $productPromo->p_product_city = $request->input('p_product_city');
    $productPromo->p_product_status =1;
    $productPromo->p_product_image = $fileNameToStore;
    $productPromo->save();
    return redirect('/new_product_promotion')->with('status', 'Le   produit  '
     .$productPromo->p_product_name.'     a été ajouté');
}







}