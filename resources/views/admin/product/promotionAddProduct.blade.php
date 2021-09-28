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
                <form class="cmxform" id="commentForm" method="POST" action="{{url('/p_post_product')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <fieldset>
                       

            

                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title" style="text-align:center;"> Ajouter une promotion de produire</h3>


                    <div class="form-group row">
                      <div class="col-lg-3">
                        <label class="col-form-label">Nom :</label>
                      </div>
                      <div class="col-lg-8">
                        <input class="form-control" maxlength="50" name="p_product_name" type="text" placeholder="Nom du produit..">
                      </div>
                    </div>


                    <div class="form-group row">
                      <div class="col-lg-3">
                        <label class="col-form-label">Description</label>
                      </div>
                      <div class="col-lg-8">
                        <textarea  name="p_product_description" class="form-control" maxlength="10000" type="text" rows="2" placeholder="Description du produit.."></textarea>
                    </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                          <label class="col-form-label">Prix</label>
                        </div>
                        <div class="col-lg-8">
                          <input class="form-control"  name="p_product_price"  type="number" placeholder="Prix du produit..">
                        </div>
                      </div>

                     <div class="form-group row">
                        <div class="col-lg-3">
                          <label class="col-form-label">Boutique</label>
                        </div>
                        <div class="col-lg-8">
                            <select name="p_product_shop" class="form-control">
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
                            <select name="p_product_category" class="form-control">
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


                            <select name="p_product_city" class="form-control">
                                @foreach ($cities as $city)
                                <option >{{$city->city_name}}
                                </option> 
                                @endforeach 
                            </select>
                        </div>
                      </div>
                     
                     

                      <div class="form-group row">
                        <div class="col-lg-3">
                          <label class="col-form-label">Image</label>
                        </div>
                        <div class="col-lg-8">
                          <input  class="form-control" name="p_product_image" type="file">
                        </div>
                      </div>

                    <input class="btn btn-primary" type="submit" value="Submit">
                    <a href="{{URL::to('/products')}}" class="btn btn-danger">Annuler</a>
                    

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
      <!-- page-body-wrapper ends -->
@endsection