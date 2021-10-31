@extends('layouts.clientLayouts.appClient')
@section('contenu')<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Mukta:wght@300&display=swap" rel="stylesheet">
 <main class="main">            
    
@include('include.menu')
<div class="container">
  <div class="product-intro divide-line up-effect">
        <div class="col-6 col-sm-4 col-lg-3 product-default">
            <figure>
                <a href="product.html">
                    <img src="{{asset('frontend/images/products/product-1.jpg')}}">
                </a>
                <!-- <span class="product-label label-sale">27% OFF</span> -->
            </figure>
            <div class="product-details">
                <h2 class="product-title">
                    <a href="product.html">Porto Short Name</a>
                </h2>
                <div class="ratings-container">
                    <div class="product-ratings">
                        <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                        <span class="tooltiptext tooltip-top"></span>
                    </div><!-- End .product-ratings -->
                </div><!-- End .product-container -->
                <div class="price-box">
                    <span class="product-price">$46.00</span>
                </div><!-- End .price-box -->
                <div class="product-action">
                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i>ADD TO CART</button>
                    <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                </div>
            </div><!-- End .product-details -->
        </div>
  
    <nav class="toolbox toolbox-pagination">
        
    </nav>
</div><!-- End .container -->

</main><!-- End .main -->
@endsection
        

       