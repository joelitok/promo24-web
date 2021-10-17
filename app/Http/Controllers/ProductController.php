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
//affichier le formulaire d'ajout
    public function new_product_promotion(){
        $categories=Category::orderBy('id','DESC')->get();
        $cities=City::orderBy('id','DESC')->get();
        $shops=Shop::orderBy('id','DESC')->get();
        return view('admin.product.promotionAddProduct')
        ->with('categories',$categories)
        ->with('cities', $cities)
        ->with('shops',$shops);
    }


    //affichier le formulaire d ajout de produit
    public function new_product(){
        $categories=Category::orderBy('id','DESC')->get();
        $cities=City::orderBy('id','DESC')->get();
        $shops=Shop::orderBy('id','DESC')->get();
        
        return view('admin.product.addProduct')
        ->with('categories',$categories)
        ->with('cities', $cities)
        ->with('shops',$shops);
    }


    //ajouter une image
    public function post_product(Request $request){ 

        $this->validate($request,
        ['product_name'=>'required',
        'product_description'=>'required',
        'product_price'=>'required',
        'product_shop'=>'required',
        'product_category'=>'required',
        'product_city'=>'required',
        'product_image'=>'image|nullable|max:1999'
    ]);


        if($request->hasFile('product_image')){
            //methode 1
             //1 get file name with extension
        
             $fileNameWithExt=$request->file('product_image')->getClientOriginalName();
             //2 file name without extension
        
             $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        
             //3 get extension
             $extension=$request->file('product_image')->getClientOriginalExtension();
        
             //4 renamane image to store
             $fileNameToStore=$fileName.'_'.time().'.'.$extension;
        
             $path =$request->file('product_image')->storeAs('public/product_images',
             $fileNameToStore);

             $uploadedFileUrl = Cloudinary::upload($request->file('slider_image')->getRealPath())->getSecurePath();                
   
        //methode 2
        // $image = $request->file('product_image');
        // $new_name_image = rand() . '.' . $image->getClientOriginalExtension();
        // $image->move(public_path('product_images'), $new_name_image);
        
        }else{
        //     //methode 1
       $fileNameToStore = 'noimage.jpg';

         $new_name_image= 'noimage.jpg';
        }
        $product=new Product();     
        $product->product_name = $request->input('product_name');
        $product->product_description = $request->input('product_description');
        $product->product_price = $request->input('product_price');
        $product->product_shop = $request->input('product_shop');
        $product->product_category = $request->input('product_category');
        $product->product_city = $request->input('product_city');
        $product->product_status =1;
        $product->product_image =  $uploadedFileUrl;
        $product->save();
        return redirect('/new_product')->with('status', 'Le produit ' 
        .$product->product_name.'     a été ajouté');
}



//affichier la liste des produits
public function list_products(){
    $products=Product::orderBy('id','DESC')->get();
    return view('admin.product.productsList')->with('products',$products);
}


//supprimer un produire et son images
public function del_product($id){
    $product=Product::find($id);
    if($product->product_image!='noimage.jpg'){
        Storage::delete('public/product_images/'.$product->image);
    }
    $product->delete();
    return redirect('/list_products')->with('status', 
    'le produit '.$product->product_name.' a été supprimer avec succès');
}





//fonction pour modifier un produit
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
        $fileNameToStore=$fileName.'_'.time().'.'.$extension;
    
        $path =$request->file('product_image')->storeAs('public/product_images', $fileNameToStore);
    
        if($product->product_image!='noimage.jpg'){
            Storage::delete('public/product_images/'.$product->image);
        }
        $product->product_image=$fileNameToStore;
    
    }
    $product->update();
    return redirect('/list_products')->with('status', 'le produit '.$product->product_name.' a été modifier avec succès');
}




//éditer un produit
public function edit_product($id){
    $product=Product::find($id);
    $categories=Category::orderBy('id','DESC')->get();
    $cities =City::orderBy('id','DESC')->get();
    $shops=Shop::orderBy('id','DESC')->get();
    return view('admin.product.editProduct')->with('product', $product)
    ->with('categories',$categories)->with('cities',$cities)->with('shops',$shops);
}


//désactivé un produit
public function desactiver_product($id){
    $product=Product::find($id);
    $product->product_status=0;
    $product->update();
    return redirect('/list_products')
    ->with('status', 'le produit '.$product->product_name.' a été désactiver avec succès');

}


//activer un produit
public function activer_product($id){
    $product=Product::find($id);
    $product->product_status=1;
    $product->update();
    return redirect('/list_products')
    ->with('status', 'le produit '.$product->product_name.' a été désactiver avec succès');

}



//voir la parti detail de notre application 
public function product_detail($id,$category){
    $product=Product::find($id);
    $products=Product::where('product_category',$category)->limit(3)->orderBy('id','DESC')->get();
    $shops=Shop::orderBy('id','DESC')->get();
    $categories=Category::orderBy('id','DESC')->get();
    return view('client.product_detail')
    ->with('product',$product)
    ->with('shops',$shops)
    ->with('products', $products)
    ->with('categories',$categories);
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
    $p_products=ProductPromo::orderBy('id','DESC')->get();
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
        $fileNameToStore=$fileName.'_'.time().'.'.$extension;
    
        $path =$request->file('p_product_image')->storeAs('public/product_images',
        $fileNameToStore);
        
        $uploadedFileUrl = Cloudinary::upload($request->file('slider_image')->getRealPath())->getSecurePath();                
   
    
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
    $productPromo->p_product_image = $uploadedFileUrl;
    $productPromo->save();
    return redirect('/new_product_promotion')->with('status', 'Le produit  '
     .$productPromo->p_product_name.'     à été ajouté');
}







}