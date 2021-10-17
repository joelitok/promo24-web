@extends('layouts.adminLayouts.appAdmin')
@section('contenu')
 <!-- partial -->
 <div class="main-panel">
    <div class="content-wrapper">
      <div class="row grid-margin">
        <div class="col-12">
          <div>
              @if(Session::has('status'))
          <div class="alert alert-success">
            {{Session::get('status')}}
            {{Session::put('status',null)}} 
          </div>    
          @endif

          @if(count($errors)>0)
            <div class="alert alert-warning">
            <ul>
          @foreach($errors->all() as $error)
             <li>{{$error}}</li>
          @endforeach
          @endif
          </div>
          <form class="cmxform" id="commentForm" method="POST" action="{{url('/post_product_shop')}}" enctype="multipart/form-data">
              {{csrf_field()}}
              <fieldset>
                 

      

          <div class="card">
            <div class="card-body">
              <h3 class="card-title" style="text-align:center;"> Ajouter un produit</h3>


              <div class="form-group row">
                <div class="col-lg-3">
                  <label class="col-form-label">Nom :</label>
                </div>
                <div class="col-lg-8">
                  <input class="form-control" maxlength="50" name="product_name" type="text" placeholder="Nom du produit.." required>
                </div>
              </div>


              <div class="form-group row">
                <div class="col-lg-3">
                  <label class="col-form-label">Description</label>
                </div>
                <div class="col-lg-8">
                  <textarea  name="product_description" class="form-control"  type="text" maxlength="250" placeholder="Description du produit.." required></textarea>
              </div>
              </div>
              <div class="form-group row">
                  <div class="col-lg-3">
                    <label class="col-form-label">Prix</label>
                  </div>
                  <div class="col-lg-8">
                    <input class="form-control"  name="product_price"  type="number" placeholder="Prix du produit.." required>
                  </div>
                </div>

               <div class="form-group row">
                  <div class="col-lg-3">
                    <label class="col-form-label">Boutique</label>
                  </div>
                  <div class="col-lg-8">
                      <select name="product_shop" class="form-control">
                          @foreach ($shops as $shop)
                              
                              <option >{{$shop->shop_name}}
                              </option>
                          @endforeach
                          
                       
                         
                      </select>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-lg-3">
                    <label class="col-form-label">Cat&eacute;gorie</label>
                  </div>
                  <div class="col-lg-8">
                      <select name="product_category" class="form-control">
                          @foreach ($categories as $categorie)
                          <option> {{$categorie->category_name}}
                          </option>    
                          @endforeach
                          
                         
                      </select>
                  </div>
                </div>

           
                <div class="form-group row">
                  <div class="col-lg-3">
                    <label class="col-form-label">Ville</label>
                  </div>
                  <div class="col-lg-8">


                      <select name="product_city" class="form-control">
                          @foreach ($cities as $city)
                          <option >{{$city->city_name}}
                          </option> 
                          @endforeach 
                      </select>
                  </div>
                </div>
               
               

<div class="form-group row">
<div class="col-lg-3">
<label class="col-form-label" id="colId">Image</label>
</div>
<div class="col-lg-8">
<label class="btn btn-outline-success btn-file">Selectionné une Image 
<input  class="form-control " name="product_image" type="file" id="product_image_id"  onchange="PreviewImage();">
</label>
<img id="uploadPreview" style="width:100px; height:100px"/>                 
</div>
</div>  
<script type="text/javascript">

function PreviewImage(){
var oFReader = new FileReader();
oFReader.readAsDataURL(document.getElementById("product_image_id").files[0]);
oFReader.onload =function (oFREvent){
document.getElementById("uploadPreview").src = oFREvent.target.result;
}}
</script>
<input class="btn btn-primary" type="submit" value="Submit">
<a href="{{URL::to('/list_products')}}" class="btn btn-danger">Annuler</a>

<!--<div class="form-group row">
<div class="col-lg-3">
<label class="col-form-label">Image</label>
</div>
<div class="col-lg-8">
<input  class="form-control" name="product_image" type="file" required>
</div>
</div> -->
<!--<img id="uploadPreview" style="width:100px; height:100px"/>
<input id="uploadImage" type="file" name="myPhoto" onchange="PreviewImage();"> -->
              
               
              

            </div>
           
          </div>



          
      </fieldset>
    </form>


        </div>
      </div>
   </div>
  <!-- content-wrapper ends -->
  @include('include.footerAdmin')
  </div>
  <!-- main-panel ends -->
</div>
@endsection