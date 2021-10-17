@extends('layouts.adminLayouts.appAdmin')
@section('contenu')
<div class="main-panel">
    <div class="content-wrapper">



      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Listes des produires en promotion</h4>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                        <th>Ordre</th>
                        <th>image</th>
                        <th>Nom du produire</th>
                        <th>Prix</th>
                        <th>Boutique</th>
                       
                        <th>ville</th>
                        <th colspan="2">Actions</th>
                        
                    </tr>
                  </thead>
          
        <tbody>
           
@if($p_products)
{{$increment=1}}
 @foreach ($p_products as $p_product)

 <tr>
    <td>{{$increment=1}}</td>
    <td><img src="{{$p_product->p_product_image}}"></td>
    <td>{{$p_product->p_product_name}}</td>
    <td>{{$p_product->p_product_price}} FCFA</td>
    <td>{{$p_product->p_product_shop}}</td>
    <td>{{$p_product->p_product_city}}</td>
    
    <td>
      <a class="btn btn-outline-danger" href="{{url('/del_p_product/'.$p_product->id)}}" id="delete">Delete</a>
     
      <button class="btn btn-outline-primary">View</button>
    </td>
</tr> 
 {{$increment+=$increment}}
 @endforeach 
@else
<h2 class="alert alert-success"> Aucun produire trouver dans la liste des produires </h2>
    
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