<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalogue;

class CatalogueController extends Controller
{
    public function catalogues(){
        $catalogues=Catalogue::paginate(3);
        return view('admin.catalogue.catalogueList')->with('catalogues',$catalogues);
}

public function new_catalogue(){
        return view('admin.catalogue.addcatalogue');
}


public function post_catalogue(Request $request){

$catalogue=new Catalogue();
$catalogue->catalogue_name = $request->input('catalogue_name');


$catalogue->save();
return redirect('/new_catalogue')->with('status','La  catégorie'.$catalogue->catalogue_name.'     à été ajouté ');
                                                }


public function del_catalogue($id){
$catalogue=Catalogue::find($id);
$catalogue->delete();
return redirect('/catalogues')->with('status','La catégorie'.$catalogue->catalogue_name.'       à été supprimé');
                                                                   }

}
