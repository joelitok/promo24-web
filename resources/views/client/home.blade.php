@extends('layouts.clientLayouts.appClient')
@section('contenu')<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Mukta:wght@300&display=swap" rel="stylesheet">
 <main class="main">            
    
@include('include.menu')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="home-slider owl-carousel owl-theme" data-toggle="owl" data-owl-options="{
                        'items' : 1,
                        'margin' : 0,
                        'nav' : true,
                        'dots' : false
                    }">
                @foreach ($sliders as $slider)
                


                @if(config('app.env') === 'local')
                <div class="home-slide" style="background-image: url('/storage/slider_images/{{$slider->slider_image}}');">
                    <div class="slide-content content-left">
                        <h2 class="text-left">Top<br> {{$slider->slider_name}}</h2>
                        <div class="skew-box-group">
                            <span class="skew-box">{{\Illuminate\Support\Str::limit($slider->slider_description, 30, $end='...')}}</span>
                            <span class="skew-box">{{$slider->slider_price}} FCFA</span>
                        </div>
                        <button class="btn">Voir plus</button>
                    </div>                                
                </div>
                @else
                <div class="home-slide" style="background-image: url('https://res.cloudinary.com/placide-tchoufa-nkouatchet/image/upload/v1634853537/{{$slider->slider_image}}');">
                    <div class="slide-content content-left">
                        <h2 class="text-left">Top<br> {{$slider->slider_name}}</h2>
                        <div class="skew-box-group">
                            <span class="skew-box">{{\Illuminate\Support\Str::limit($slider->slider_description, 30, $end='...')}}</span>
                            <span class="skew-box">{{$slider->slider_price}} FCFA</span>
                        </div>
                        <button class="btn">Voir plus</button>
                    </div>                                
                </div>
                @endif





                @endforeach
                       
        </div>
                


        <div class="page-header">
            <div class="container">
                <h2 style="font-family:'Mukta', sans-serif;font-size:30px;text-align:center;color:black">Pour consulter vos promotions commencé par selectionné votre ville, ensuite
                    catégories  et en fin votre catalogues puis cliquer sur le boutton rechercher</h2>

                   <div class="d-flex btn-lg btn-block justify-content-center align-items-center container">
                       <form action="{{URL::to('/search')}}" method="get">
    
                            <select name="city"  class="form-select"   name="city" id="city" style="font-family:'Mukta', sans-serif;">
                                <option value="0" disabled="true" selected="true"   style="margin-top: 10px;font-family: 'Mukta', sans-serif;"  >- Selection Votre ville  -</option>
                            @foreach($cities as $city)
                                <option value="{{$city->id}}">{{$city->city_name}}</option>
                                @endforeach 
                        </select> 
    
                        <select name="category_name" class="form-select" id="category_name" style="margin-top: 10px;font-family: 'Mukta', sans-serif;">
                            <option value="0" disabled="true" selected="true"style="margin-top: 10px;font-family: 'Mukta', sans-serif;" >Aucun </option>
                        </select> 
    
                        <select name="catalogue_name" class="form-select" id="catalogue_name" style="margin-top: 10px;font-family: 'Mukta', sans-serif;">
                            <option value="0" disabled="true" selected="true" style="margin-top: 10px;font-family: 'Mukta', sans-serif;" >Aucun </option>
                         </select>    
                          
                            
                                <input type="submit" class="btn btn-warning btn-block"  style="margin-top: 10px;font-family: 'Mukta', sans-serif;" value="Recherché">
                          
                        </form>
                    </div><!-- End .col-md-6 -->
                 
                     </div ><!-- End .container -->
                      </div><!-- End .page-header -->   

             
                       
    

        

                <h4>Produits</h4>
                <div class="row row-sm">
                   
                    @foreach ($products as $product)
                        
                    
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
                    @endforeach  
                    </div>
                </div>
            </div><!-- End .col-lg-9 -->
            {{$products->links('paginate.paginatelinks')}}
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-6"></div>
</main><!-- End .main -->
@endsection
        

       