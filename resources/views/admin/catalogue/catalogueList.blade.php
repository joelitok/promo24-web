@extends('layouts.adminLayouts.appAdmin')
@section('contenu')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Listes des catalogues</h4>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                        <th>Ordre</th>
                        <th>Nom de la catalogue</th>
                        <th colspan="3" style="text-align: center;">Actions</th>
                        
                    </tr>
                  </thead>
          
        <tbody>
{{$inc=1}}         
@if($catalogues)
 @foreach ($catalogues as $catalogue)  
 <tr>
    <td>{{$inc}}</td>
    <td>{{$catalogue->catalogue_name}}</td>
   <!-- <td>
      <label class="badge badge-info">On hold</label>
    </td>   -->
    <td>
    <a class="btn btn-outline-danger" href="{{url('/del_catalogue/'.$catalogue->id)}}" id="delete">Delete</a>             
    </td>
</tr>
 {{$inc+=1}}
 
 @endforeach 
 
@else
<h2 class="alert alert-success"> Aucun catégorie trouver dans la liste des catégories </h2>
    
@endif
</tbody>
           
</table>
              </div>
              <div style="text-align: right">{{$catalogues->links('paginate.paginatelinks')}}</div>
              
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