@extends('layouts.clientLayouts.appClient')
@section('contenu')
{{-- <main class="main home">
    <div class="container">
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="home-slider owl-carousel owl-theme" data-toggle="owl" data-owl-options="{
                    'items' : 1,
                    'margin' : 0,
                    'nav' : true,
                    'dots' : false
                }">
                
                    @if($sliders)
                     @foreach ($sliders as $slider)
               
                    
                    <div class="banner-product bg-grey banner-cat" style="background-image: url('{{asset('frontend/{{asset('frontend/images/banners/category_banner.jpg')}}');background-position : 50%;">
                        <div class="content-left text-right">
                            <h2>SMART</h2>
                            <h3>Phone Deals</h3>
                        </div>
                        <div class="ml-3 content-right">
                            <div class="skew-box-group">
                                <span class="skew-box">Exclusive COUPON</span>
                                <h3 class="sale-off skew-box"><span>$100</span>off</h3>
                            </div>
                            <button class="btn">View All Now</button>
                        </div>
                    </div>
                    


                    </div>
                    @endforeach 
                    @endif  
                
            </div>
        </div>



        <section class="service-section mb-4">
            <div class="col-md-6 col-xl-3">
                <div class="service-widget">
                    <i class="service-icon icon-shipping"></i>
                    <div class="service-content">
                        <h3 class="service-title">retour gratuit </h3>
                        <p>livraison gratuit pour toute les commandes supérieure à 10000 FCFA.</ FCFAp>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="service-widget">
                    <i class="service-icon icon-money"></i>
                    <div class="service-content">
                        <h3 class="service-title">Garantie de remboursement</h3>
                        <p>100% Garantie de remboursement</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="service-widget">
                    <i class="service-icon icon-support"></i>
                    <div class="service-content">
                        <h3 class="service-title">Assistance en ligne 24/7</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="service-widget">
                    <i class="service-icon icon-secure-payment"></i>
                    <div class="service-content">
                        <h3 class="service-title">Paiement</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="product-panel">
            <div class="section-title">
                <h2>Appareil</h2>
            </div>

            <div class="owl-carousel  owl-theme" data-toggle="owl" data-owl-options="{
                'margin': 0,
                'items': 3,
                'autoplayTimeout': 5000,
                'dots': false,
                'nav': true,
                'responsive': {
                    '576': {
                        'items': 3
                    },
                    '992': {
                        'items': 4
                    },
                    '1200': {
                        'items' : 5
                    }
                }
            }"> 

            @if($products)
            @foreach ($products as $product)
            <div class="product-default inner-quickview inner-icon">
                <figure>
                    <a  onclick="window.location='{{url('/product_detail/'.$product->id.'/'.$product->product_category)}}'">
                 <img src="{{asset('/storage/product_images/'.$product->product_image)}}"> 
            {{-- <img src="{{URL::to('/')}}/product_images/{{$product->product_image}}" >
                         
                    </a>
                    <div class="label-group">
                        <span class="product-label label-cut">2550% OFF</span>
                        <span class="product-label label-cut" style="background-color:#F0C300">2700% OFF</span>
                    </div>
                    <div class="btn-icon-group">
                        {{-- <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button> 
                    </div>
                    <a href="" class="btn-quickview" title="Voir Plus" onclick="window.location='{{url('/product_detail/'.$product->id.'/'.$product->product_category)}}'">Voir Plus</a>
                </figure>
                
                <div class="product-details">
                    <div class="category-wrap">
                        <div class="category-list">
                            <a href="" class="product-category" onclick="window.location='{{url('/product_detail/'.$product->id.'/'.$product->product_category)}}'">{{$product->product_category}}</a>
                        </div>
                        <a href="" class="btn-icon-wish" onclick="window.location='{{url('/product_detail/'.$product->id.'/'.$product->product_category)}}'"><i class="icon-heart"></i></a>
                    </div>
                    <h2 class="product-title">
                        <a href="" onclick="window.location='{{url('/product_detail/'.$product->id.'/'.$product->product_category)}}'">{{$product->product_name}}</a>
                    </h2>
                    <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                            <span class="tooltiptext tooltip-top"></span>
                        </div><!-- End .product-ratings -->
                    </div><!-- End .product-container -->
                    <div class="price-box">
                        <span class="old-price">59.00 FCFA</span>
                        <span class="product-price">{{$product->product_price}} FCFA</span>
                    </div><!-- End .price-box -->
                </div><!-- End .product-details -->
            </div>
            @endforeach
            @endif
                
               
               

             </div>
        </section>

        <div class="row row-sm">
            <div class="col-lg-6">
                <div class="banner-product bg-grey" style="background-image: url('{{asset('frontend/images/products/product-banner1.jpg')}}');background-position : 50%;">
                    <h2><br>CAMERAS</h2>
                    <div class="ml-3 primary-background">
                        <h3 class="skew-box">A partir de</h3>
                        <h4 class="skew-box"><span class=" product-price">39900  FCFA</span><span class="old-price">49900 FCFA</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-product bg-grey" style="background-image: url('{{asset('frontend/images/products/product-banner2.jpg')}}');
                    background-position : 48% 10%;">
                    <h2>POUR TOUS <br>LES STYLES</h2>
                    <div class="ml-3 primary-background">
                        <h3 class="skew-box">A partir de</h3>
                        <h4 class="skew-box"><span class="product-price">3990  FCFA</span><span class="old-price">4990  FCFA</span></h4>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

 

    <div class="container">
       




        <div class="home-banner"> 
            <div class="image-container">
                <img src="{{asset('frontend/images/banners/banner.jpg')}}">
            </div>
            <div class="info-group">
                <div class="">
                    <p>Nouvelle offre</p>
                    <h2>offre exlusif</h2>
                </div>
                <div class="skew-box-group">
                    <span class="skew-box">Offre Exclusif </span>
                    <h3 class="sale-off skew-box"><span>200 FCFA </span></h3>
                </div>
                <div class="">
                    <a href="{{URL::to('/categories')}}" class="btn">voie plus</a>
                </div>
            </div>
        </div>
        
    </div>
    
    <section class="container mt-3 mb-7" id="topBrands">
        <div class="section-title mb-6">
            <h2>Grande marques</h2>
        </div>
        <div class="partners-carousel owl-carousel owl-theme text-center" data-toggle="owl" data-owl-options="{
            'loop' : true,
            'nav': false,
            'dots': true,
            'autoHeight': true,
            'autoplay': true,
            'autoplayTimeout': 5000,
            'responsive': {
              '0': {
                'items': 2,
                'margin': 0
              },
              '480': {
                'items': 3
              },
              '768': {
                'items': 4
              },
              '992': {
                'items': 5
              }
            }
        }">
            <img src="{{asset('frontend/images/logos/1.png')}}" alt="logo">
            <img src="{{asset('frontend/images/logos/2.png')}}" alt="logo">
            <img src="{{asset('frontend/images/logos/3.png')}}" alt="logo">
            <img src="{{asset('frontend/images/logos/4.png')}}" alt="logo">
            <img src="{{asset('frontend/images/logos/5.png')}}" alt="logo">
        </div>
    </section>
</main><!-- End .main -->
 --}}







 <main class="main">            
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            
        </div><!-- End .container -->
    </nav>

    <div class="container">
        <div class="row">
 <div class="col-lg-12">
<div class="banner-product bg-grey banner-cat" style="background-image: url({{asset('frontend/images/banners/category_banner.jpg')}}); background-position : 50%;">
        <div class="content-left text-right">
            <h2>SMART</h2>
            <h3>Phone Deals</h3>
        </div>
        <div class="ml-3 content-right">
            <div class="skew-box-group">
                <span class="skew-box">Exclusive COUPON</span>
                <h3 class="sale-off skew-box"><span>$100</span>off</h3>
            </div>
            <button class="btn">View All Now</button>
        </div>
</div>




<section class="service-section mb-4">
    <div class="col-md-6 col-xl-3">
        <div class="service-widget">
            <i class="service-icon icon-shipping"></i>
            <div class="service-content">
                <h3 class="service-title">retour gratuit </h3>
                <p>livraison gratuit pour toute les commandes supérieure à 10000 FCFA.</ FCFAp>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="service-widget">
            <i class="service-icon icon-money"></i>
            <div class="service-content">
                <h3 class="service-title">Garantie de remboursement</h3>
                <p>100% Garantie de remboursement</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="service-widget">
            <i class="service-icon icon-support"></i>
            <div class="service-content">
                <h3 class="service-title">Assistance en ligne 24/7</h3>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="service-widget">
            <i class="service-icon icon-secure-payment"></i>
            <div class="service-content">
                <h3 class="service-title">Paiement</h3>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </div>
</section>





               









                <div class="row row-sm">
                    @foreach ($products as $product)
                        
                    
                    <div class="col-6  col-md-3 col-lg-3 col-xs-4 ">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a onclick="window.location='{{url('/product_detail/'.$product->id.'/'.$product->product_category)}}'">
                                    <img src="{{$product->product_image}}">
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
                                <h2 class="product-title">
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


                {{-- <nav class="toolbox toolbox-pagination">
                    <div class="toolbox-item toolbox-show">
                        <label>Showing 1–9 of 60 results</label>
                    </div><!-- End .toolbox-item -->

                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><span>...</span></li>
                        <li class="page-item"><a class="page-link" href="#">15</a></li>
                        <li class="page-item">
                            <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
                        </li>
                    </ul>
                </nav> --}}
            </div><!-- End .col-lg-9 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-6"></div>
</main><!-- End .main -->








@endsection
        

       