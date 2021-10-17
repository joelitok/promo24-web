@extends('layouts.adminLayouts.appAdmin')
@section('contenu')
<div class="main-panel">
    <div class="content-wrapper">



      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Listes des boutiques</h4>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                        <th>Ordre #</th>
                        <th>Nom du slider</th>
                        <th>Prix</th>
                        <th>Image</th>
                        <th>Description du slider</th>
                        
                        <th> Status</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
  
                  <tbody>
    {{$increment=1}}                   
      @foreach ($sliders as $slider)
  <tr>
  <td>{{$increment}}</td>
{{--  <td><img src="/storage/slider_images/{{$slider->slider_image}}"></td>  --}}
<td>  <img src="https://res.cloudinary.com/placide-tchoufa-nkouatchet/image/upload/v1634436300/{{$slider->slider_image}}">
</td>                                             
 <td>{{$slider->slider_name}}</td>
 <td>{{$slider->slider_price}}</td>
  <td>{{$slider->slider_description}}</td>
  <td>
      @if($slider->slider_status==1)
      <label class="badge badge-success">Active</label> </td>     
      @else
      <label class="badge badge-danger">Désactive</label> </td>      
      @endif
    
    </td>
     <td>
      @if($slider->slider_status==1)
      <button class="btn btn-outline-warning"  onclick="window.location='{{url('/desactiverslider/'.$slider->id)}}'">désactiver</button>
              
      @else
      <button class="btn btn-outline-success"  onclick="window.location='{{url('/activerslider/'.$slider->id)}}'">activer</button>
         
      <a  href="" id="delete"></a> 
         
      @endif
  <a class="btn btn-outline-danger" href="{{url('/del_slider/'.$slider->id)}}"   id="delete">delete</a>
  </td>
</tr>  
{{$increment+=1}}
@endforeach
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