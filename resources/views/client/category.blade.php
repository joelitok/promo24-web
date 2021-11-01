@extends('layouts.clientLayouts.appClient')
@section('contenu')<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Mukta:wght@300&display=swap" rel="stylesheet">
 <main class="main">            
    
@include('include.menu')
<div class="container">
    <h2 style="font-size: 30px;color:black"> Cliqué sur votre categorie :</h2>
  <div class="product-intro divide-line up-effect">


        @isset($categories)
@foreach ($categories as $category)
   
<div class="col-6 col-sm-4 col-lg-3 product-default justify-content-center">
    <figure>


        
        <!-- <span class="product-label label-sale">27% OFF</span> -->
    </figure>
     <div class="product-details">
         <a href="#">
            <i class="icon-home" style="font-size: 60px"></i>
         </a>
         <h2>
            <a href="#">{{$category->category_name}}</a>
        </h2>
    </div>
</div> 
@endforeach  
@endisset
  
   
</div><!-- End .container -->
<nav class="toolbox toolbox-pagination">
    {{$categories->links('paginate.paginatelinks')}}
</nav>
</main><!-- End .main -->
@endsection
        

       