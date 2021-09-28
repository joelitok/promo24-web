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
                        <th>Nom de la Boutique</th>
                        <th>Description de la boutique</th>
                        
                        <th>Nom de la Ville</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
  
                  <tbody>
{{$increment=1}}                   
@foreach ($shops as $shop)
<tr>
  <td>{{$increment}}</td>
 <td>{{$shop->shop_name}}</td>
  <td>{{$shop->shop_description}}</td>
  <td>{{$shop->shop_city_name}}</td>
  <td>
  <a class="btn btn-outline-danger" href="{{url('/del_shop/'.$shop->id)}}"   id="delete">delete</a>
  </td>
</tr>  
<input type="hidden" value="{{$increment+=$increment}}">
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