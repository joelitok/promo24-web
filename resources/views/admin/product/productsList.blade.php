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
                        <th>status</th>
                        <th colspan="3" style="text-align: center;">Actions</th>
                        
                    </tr>
                  </thead>
          
        <tbody>
  
@if($products)
{{$inc=1}}
 @foreach ($products as $product)

 <tr>
    <td>{{$inc}}</td>
    {{-- <td><img src="/storage/product_images/{{$product->product_image}}"></td> --}}
    <td> <img src="{{ URL::to('/') }}/product_images/{{ $product->product_image}}" alt=""></td>
    <td>{{$product->product_name}}</td>
    <td>{{$product->product_price}} FCFA</td>
    <td>{{$product->product_shop}}</td>
    <td>{{$product->product_city}}</td>
    <td>
      @if($product->product_status==1)
        <label class="badge badge-success">Active</label> </td>     
        @else
        <label class="badge badge-danger">Desactive</label> </td>      
        @endif
      
      
      
      </td>
   <!-- <td>
      <label class="badge badge-info">On hold</label>
    </td>   -->
    <td>
     @if($product->product_status==1)
      <button class="btn btn-outline-warning"  onclick="window.location='{{url('/desactiverproduct/'.$product->id)}}'">désactiver</button>
              
      @else
      <button class="btn btn-outline-success"  onclick="window.location='{{url('/activerproduct/'.$product->id)}}'">activer</button>
         
      <a  href="" id="delete"></a>
         
      @endif
      <a class="btn btn-outline-danger" href="{{url('/del_product/'.$product->id)}}" id="delete">Delete</a>
      <button class="btn btn-outline-success"  onclick="window.location='{{url('/edit_product/'.$product->id)}}'">Edit</button>
                    
    </td>
</tr>







 {{$inc+=1}}
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