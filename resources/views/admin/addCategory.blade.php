@extends('layouts.adminLayouts.appAdmin')
@section('contenu')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row grid-margin">
              <div class="col-12">

                <form class="cmxform" id="commentForm" method="POST" action="{{url('/post_category')}}">
                    {{csrf_field()}}
                    <fieldset>
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title" style="text-align:center;"> Ajouter une cat&eacute;gorie</h3>
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
                    <div class="form-group row">
                      <div class="col-lg-3">
                        <label class="col-form-label">Nom :</label>
                      </div>
                      <div class="col-lg-8">
                        <input class="form-control" maxlength="50" name="category_name" type="text" placeholder="Nom de la categorie..">
                      </div>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Submit">
                    <a href="{{URL::to('/categories')}}" class="btn btn-danger">Annuler</a>
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