@extends('layouts.adminLayouts.appAdmin')
@section('contenu')
<div class="main-panel">
    <div class="content-wrapper">



      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Listes des produires disponibles</h4>
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
                        <th>Actions</th>
                        
                    </tr>
                  </thead>
          
        <tbody>
           
@if($products)
{{$increment=1}}
 @foreach ($products as $product)

 <tr>
    <td>{{$increment=1}}</td>
    <td>2012/08/03</td>
    <td>{{$product->product_name}}</td>
    <td>{{$product->product_price}} FCFA</td>
    <td>{{$product->product_shop}}</td>
    <td>{{$product->product_city}}</td>
    
    <td>
      <label class="badge badge-info">On hold</label>
    </td>
    <td>
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