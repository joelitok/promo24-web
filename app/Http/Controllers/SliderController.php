<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;


class SliderController extends Controller
{
    //
    public function sliders(){
        $sliders=Slider::get();
        return view('admin.slider.sliderList')->with('sliders', $sliders);
    }
    public function new_slider(){
        return view('admin.slider.addSlider');
    }



    public function post_slider(Request $request){ 

        $this->validate($request,
        ['slider_name'=>'required',
        'slider_description'=>'required',
        'slider_image'=>'image| nullable|max:1999'
    ]);

        if($request->hasFile('slider_image')){

        // //methode 1
        //      //1 get file name with extension
        
        //      $fileNameWithExt=$request->file('slider_image')->getClientOriginalName();
        //      //2 file name without extension
        
        //      $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        
        //      //3 get extension
        //     $extension=$request->file('slider_image')->getClientOriginalExtension();
        
        //      //4 rename image to store
        //      $fileNameToStore=$fileName.'_'.time().'.'.$extension;
        

   $uploadedFileUrl = Cloudinary::upload($request->file('slider_image')->getRealPath())->getPath();                

    // $path =$request->file('slider_image')->storeAs('public/slider_images', basename($uploadedFileUrl));
    

      
        //autre methode 
       //$img = Storage::disk('public')->put('slider_images', $request->slider_image);

       //methode 2
        // $image = $request->file('slider_image');
        // $new_name_image = rand() . '.' . $image->getClientOriginalExtension();
        // $image->move(public_path('slider_images'), $new_name_image);
         
        }else{
         
        //methode 1 
       $fileNameToStore = 'noimage.jpg';

      //methode 2
      //$new_name_image='noimage.jpg';

         //autre methode 
        // $request->slider_image='noimage.jpg';
        }
        $slider=new Slider();     
        $slider->slider_name = $request->input('slider_name');
        $slider->slider_price = $request->input('slider_price');
        $slider->slider_description = $request->input('slider_description');
        $slider->slider_status =1;
        $slider->slider_image = basename($uploadedFileUrl);  
        // Upload an Image File to Cloudinary with One line of Code
        $slider->save();
        return redirect('/new_slider')->with('status', 'Le   Slider ' .$slider->slider_name.'     a été ajouté');


        
                               
//autres methode de sauvegade d'image
// Storage::disk('local')->put('exemple.txt','Contents');
// if(Storage::disk('local')->exists('file.jpg')){
// } if(Storage::disk('local')->missing('file.jpg')){
//    }
// $name=Storage::disk('local')->put('exemple.txt','Contents');
// Storage::download($name);
// Storage::url($name); 
// $fileName =time().'.'.$request->avatar->extension();
// $request->file('avatar')->storeAs('avatarstest2',$fileName,'public');





























    }






public function del_slider($id){
    $slider=Slider::find($id);
    if($slider->slider_image!='noimage.jpg'){
        Storage::delete('public/slider_images/'.$slider->slider_image);
    }
    $slider->delete();
    return redirect('/sliders')->with('status', 
    'le produit '.$slider->slider_name.' a été supprimer avec succès');

}



public function desactive_slider($id){
    $slider=Slider::find($id);
    $slider->slider_status=0;
    $slider->update();
    return redirect('/sliders')->with('status', 'le slider a été désactiver  avec succes');


}



public function active_slider($id){
    $slider=Slider::find($id);
    $slider->slider_status=1;
    $slider->update();
    return redirect('/sliders')->with('status',  ' le slider a été activer avec succès');
   
   
 


}









}
