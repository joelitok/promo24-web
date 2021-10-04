@extends('layouts.adminLayouts.appAdmin')
@section('contenu')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row grid-margin">
             
              @if(Session::has('status'))
              <div class="alert alert-success">
                {{Session::get('status')}}
                {{Session::put('status',null)}} 
              </div>    
              @endif

              @if(count($errors)>0)
              <div class="alert alert-danger">
                <ul>
              @foreach($errors->all() as $error)
                 <li>{{$error}}</li>
              @endforeach
               </div>
              @endif
            
              <div class="col-12">

                <form class="cmxform" id="commentForm" method="POST" action="{{url('/post_slider')}}" enctype="multipart/form-data">
                  {{csrf_field()}}  
                  <fieldset>


                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title" style="text-align:center;"> Ajouter un slide</h3>


                    <div class="form-group row">
                      <div class="col-lg-3">
                        <label class="col-form-label">Nom :</label>
                      </div>
                      <div class="col-lg-8">
                        <input class="form-control" maxlength="50" name="slider_name" type="text" placeholder="Nom du Slider.." required>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-lg-3">
                        <label class="col-form-label">Prix :</label>
                      </div>
                      <div class="col-lg-8">
                        <input class="form-control" maxlength="1000" name="slider_price" type="number" placeholder="Prix du Slider.." required>
                      </div>
                    </div>


                    <div class="form-group row">
                      <div class="col-lg-3">
                        <label class="col-form-label">Description :</label>
                      </div>
                      <div class="col-lg-8">
                        <input class="form-control" maxlength="50" name="slider_description" type="text" placeholder="Description du Slider.." required>
                      </div>
                    </div>
                  <div class="form-group row">
                      <div class="col-lg-3">
                        <label class="col-form-label">Image:</label>
                      </div>
                      <div class="col-lg-8">
                        <input  class="form-control" name="slider_image" type="file" required>
                      </div>
                    </div>



                    <input class="btn btn-primary" type="submit" value="Submit">
                    <a href="{{URL::to('/sliders')}}" class="btn btn-danger">Annuler</a>
                    

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