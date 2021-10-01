@extends('layouts.adminLayouts.appAdmin')
@section('contenu')
<div class="main-panel">
    <div class="content-wrapper">



      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Listes des villes</h4>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                        <th>Ordre</th>
                        <th>Nom de la ville</th>
                        <th colspan="3" style="text-align: center;">Actions</th>
                        
                    </tr>
                  </thead>
          
        <tbody>
           
@if($cities)
{{$increment=1}}
 @foreach ($cities as $city)

 <tr>
    <td>{{$increment}}</td>
    <td>{{$city->city_name}}</td>
   <!-- <td>
      <label class="badge badge-info">On hold</label>
    </td>   -->
    <td>
    <a class="btn btn-outline-danger" href="{{url('/del_city/'.$city->id)}}" id="delete">Delete</a>             
    </td>
</tr>







 {{$increment+=1}}
 @endforeach 
@else
<h2 class="alert alert-success"> Aucun ville trouver dans la liste des villes </h2>
    
@endif


                
                  
                   
                    
                    
                   
                    
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      
    </div>
    <!-- content-wrapper ends -->
   @include('include.footerAdmin')
  </div>
  <!-- main-panel ends -->
    
@endsection