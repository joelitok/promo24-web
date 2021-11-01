@extends('layouts.clientLayouts.appClient')
@section('contenu')<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Mukta:wght@300&display=swap" rel="stylesheet">
 <main class="main">            
    
@include('include.menu')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
        <h4>Produits</h4>
                <div class="row row-sm">
                   
                    @forelse ($products as $product)
                        
                    
                    <div class="col-6  col-md-3 col-lg-3 col-xs-4 ">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a onclick="window.location='{{url('/product_detail/'.$product->id.'/'.$product->product_category)}}'">
                                 @if(config('app.env') === 'local')
                                     <img src="/storage/product_images/{{$product->product_image}}"> 
                                     @else
                                     <img src="https://res.cloudinary.com/placide-tchoufa-nkouatchet/image/upload/v1634853537/{{$product->product_image}}">
                                     @endif 
                                </a>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                </div>
                                <a  class="btn-quickview" title="Voir Plus" onclick="window.location='{{url('/product_detail/'.$product->id.'/'.$product->product_category)}}'">Voir Plus</a>
                         </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="#" class="product-category">{{$product->product_category}}</a>
                                    </div>
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                </div>
                                <h2 class="product-name">
                                    <a href="#">{{$product->product_name}}</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">{{$product->product_price}} FCFA</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                    </div>
                   
                        
                    @empty
<h1> Aucun resultat ne correspond a votre recherche</h1>

                    @endforelse 


                  
                        
                    
                    </div>
                </div>
            </div><!-- End .col-lg-9 -->
        </div><!-- End .row -->

        {{$products->links('paginate.paginatelinks')}}
    </div><!-- End .container -->

    <div class="mb-6"></div>
</main><!-- End .main -->
@endsection
        

       