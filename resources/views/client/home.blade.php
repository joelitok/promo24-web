@extends('layouts.clientLayouts.appClient')
@section('contenu')
<main class="main home">
    <div class="container">
        <div class="row row-sm">
            <div class="col-lg-9">
                <div class="home-slider owl-carousel owl-theme" data-toggle="owl" data-owl-options="{
                    'items' : 1,
                    'margin' : 0,
                    'nav' : true,
                    'dots' : false
                }">
                  <!--  <div class="home-slide" style="background-image: url('{{asset('frontend/images/slider/home_slide1.jpg')}}');">
                        <div class="slide-content">
                            <h2 class="text-right">electronic<br>deals</h2>
                            <div class="skew-box-group">
                                <span class="skew-box">Exclusive COUPON</span>
                                <h3 class="sale-off skew-box"><span>10000FCFA</span>off</h3>
                            </div>
                            <button class="btn">View All Now</button>
                        </div>
                        <p>* Only 200 Available</p>
                    </div>   -->
                    @if($sliders)
                    @foreach ($sliders as $slider)
                    {{-- <div class="home-slide" style="background-image: url('{{asset('/storage/slider_images/'.$slider->slider_image)}}');">
                         --}}
                     <div class="home-slide" style="background-image: url('{{ URL::to('/') }}/slider_images/{{ $slider->slider_image}}');">
                         
                        {{-- <img src="{{ URL::to('/') }}/slider_images/{{ $slider->slider_image}}" alt=""> --}}
                        <div class="slide-content content-left">
                            <h2 class="text-left">Meilleur Promotion<br>{{$slider->slider_name}}</h2>
                            <div class="skew-box-group">
                                <span class="skew-box">{{$slider->slider_description}}</span>
                                <span class="skew-box">{{$slider->slider_price}} FCFA</span>
                            </div>
          
                            <a href="" class="btn btn-warning" onclick="window.location='{{url('/detail_slider/'.$slider->id)}}'" >Voir plus</a>  <!-- read function to find detail of product --->
                        </div>                                
                    </div>  
                    @endforeach 
                    @else
                    <div class="home-slide" style="background-image: url('{{asset('frontend/images/slider/home_slide2.jpg')}}');">
                          <div class="slide-content content-left">
                            <h2 class="text-left">Top brands<br>smartphones</h2>
                            <div class="skew-box-group">
                                <span class="skew-box">STARTING FROM</span>
                                <span class="skew-box">12900 FCFA</span>
                            </div>
                            <button class="btn">View All Now</button>
                        </div>                                
                   
                   
                    </div>  
                    @endif  
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-slider owl-carousel owl-theme" data-toggle="owl">
                    <div class="product-slide">
                        <h3>Offres Flash</h3>
                        <div class="product-default">
                            <figure>
                                <a href="#">
                                    <img src="{{asset('frontend/images/products/product-deal.jpg')}}">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h2 class="product-title">
                                    <a href="#">1080p Wifi IP Camera</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">5900.00 FCFA</span>
                                    <span class="product-price">4900.00 FCFA</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                        <div class="count-down-panel text-center">
                            <h4>fin de l'offre le:
                                <span class="countdown" data-plugin-countdown="" data-plugin-options="{'date': '2021/10/08 00:00:00', 'numberClass': 'font-weight-extra-bold'}"><span class="days"><span class=" font-weight-extra-bold">237</span> DAY<div class="d-inline text-uppercase">s,</div></span> <span class="hours"><span class=" font-weight-extra-bold">22:</span> </span> <span class="minutes"><span class=" font-weight-extra-bold">26:</span> </span> <span class="seconds"><span class=" font-weight-extra-bold">06</span> </span> </span>
                            </h4>
                        </div>
                    </div>
                    <div class="product-slide">
                        <h3>Flash Deals</h3>
                        <div class="product-default">
                            <figure>
                                <a href="#">
                                    <img src="{{asset('frontend/images/products/product-deal.jpg')}}">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h2 class="product-title">
                                    <a href="#">1080p Wifi IP Camera</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">59.00 FCFA</span>
                                    <span class="product-price">49.00 FCFA</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                        <div class="count-down-panel">
                            <h4>OFFER ENDS IN:
                                <span class="countdown" data-plugin-countdown="" data-plugin-options="{'date': '2020/12/31 00:00:00', 'numberClass': 'font-weight-extra-bold'}"><span class="days"><span class=" font-weight-extra-bold">237</span> DAY<div class="d-inline text-uppercase">s,</div></span> <span class="hours"><span class=" font-weight-extra-bold">20:</span> </span> <span class="minutes"><span class=" font-weight-extra-bold">26:</span> </span> <span class="seconds"><span class=" font-weight-extra-bold">06</span> </span> </span>
                            </h4>
                        </div>
                    </div>
                    <div class="product-slide">
                        <h3>Flash Deals</h3>
                        <div class="product-default">
                            <figure>
                                <a href="#">
                                    <img src="{{asset('frontend/images/products/product-deal.jpg')}}">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h2 class="product-title">
                                    <a href="#">1080p Wifi IP Camera</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">59.00 FCFA</span>
                                    <span class="product-price">49.00 FCFA</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                        <div class="count-down-panel">
                            <h4>OFFER ENDS IN:
                                <span class="countdown" data-plugin-countdown="" data-plugin-options="{'date': '2020/12/31 00:00:00', 'numberClass': 'font-weight-extra-bold'}"><span class="days"><span class=" font-weight-extra-bold">237</span> DAY<div class="d-inline text-uppercase">s,</div></span> <span class="hours"><span class=" font-weight-extra-bold">20:</span> </span> <span class="minutes"><span class=" font-weight-extra-bold">26:</span> </span> <span class="seconds"><span class=" font-weight-extra-bold">06</span> </span> </span>
                            </h4>
                        </div>
                    </div>
                </div>
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

            <div class="owl-carousel owl-theme" data-toggle="owl" data-owl-options="{
                'margin': 0,
                'items': 2,
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
                    <a href="#">
                        {{-- <img src="{{asset('/storage/product_images/'.$product->product_image)}}"> --}}
                        <img src="{{ URL::to('/') }}/product_images/{{ $product->product_image}}" alt="">
                        
                    </a>
                    <div class="label-group">
                        <span class="product-label label-cut">27% OFF</span>
                        <span class="product-label label-cut" style="background-color:#F0C300">27% OFF</span>
                    </div>
                    <div class="btn-icon-group">
                        <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                    </div>
                    <a href="" class="btn-quickview" title="Quick View" onclick="window.location='{{url('/product_detail/'.$product->id.'/'.$product->product_category)}}'">Voir Plus</a>
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
        <section class="product-panel mt-6">
            <div class="section-title">
                <h2>Aliment</h2>
            </div>

            <div class="owl-carousel owl-theme" data-toggle="owl" data-owl-options="{
                'margin': 0,
                'items': 2,
                'autoplayTimeout': 5000,
                'dots': false,
                'nav': true,
                'responsive': {
                    '576': {
                        'items': 3
                    },
                    '975': {
                        'items': 4
                    },
                    '1200': {
                        'items' : 5
                    }
                }
            }">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="#">
                            <img src="{{asset('frontend/images/products/product-13.jpg')}}">
                        </a>
                        <div class="label-group">
                            <span class="product-label label-cut">27% OFF</span>
                        </div>
                        <div class="btn-icon-group">
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                        </div>
                        <a href="#" class="btn-quickview" title="Quick View">Quick View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="category.html" class="product-category">category</a>
                            </div>
                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                        </div>
                        <h2 class="product-title">
                            <a href="#">Product Short Name</a>
                        </h2>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <div class="price-box">
                            <span class="old-price">59.00 FCFA</span>
                            <span class="product-price">49.00 FCFA</span>
                        </div><!-- End .price-box -->
                    </div><!-- End .product-details -->
                </div>
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="#">
                            <img src="{{asset('frontend/images/products/product-12.jpg')}}">
                        </a>
                        <div class="label-group">
                            <span class="product-label label-cut">27% OFF</span>
                        </div>
                        <div class="btn-icon-group">
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                        </div>
                        <a href="#" class="btn-quickview" title="Quick View">Quick View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="category.html" class="product-category">category</a>
                            </div>
                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                        </div>
                        <h2 class="product-title">
                            <a href="#">Product Short Name</a>
                        </h2>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <div class="price-box">
                            <span class="old-price">59.00 FCFA</span>
                            <span class="product-price">49.00 FCFA</span>
                        </div><!-- End .price-box -->
                    </div><!-- End .product-details -->
                </div>
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="#">
                            <img src="{{asset('frontend/images/products/product-13.jpg')}}">
                        </a>
                        <div class="label-group">
                            <span class="product-label label-cut">27% OFF</span>
                        </div>
                        <div class="btn-icon-group">
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                        </div>
                        <a href="#" class="btn-quickview" title="Quick View">Quick View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="category.html" class="product-category">category</a>
                            </div>
                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                        </div>
                        <h2 class="product-title">
                            <a href="#">Product Short Name</a>
                        </h2>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <div class="price-box">
                            <span class="old-price">59.00 FCFA</span>
                            <span class="product-price">49.00 FCFA</span>
                        </div><!-- End .price-box -->
                    </div><!-- End .product-details -->
                </div>
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="#">
                            <img src="{{asset('frontend/images/products/product-14.jpg')}}">
                        </a>
                        <div class="label-group">
                            <span class="product-label label-cut">27% OFF</span>
                        </div>
                        <div class="btn-icon-group">
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                        </div>
                        <a href="#" class="btn-quickview" title="Quick View">Quick View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="category.html" class="product-category">category</a>
                            </div>
                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                        </div>
                        <h2 class="product-title">
                            <a href="#">Product Short Name</a>
                        </h2>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <div class="price-box">
                            <span class="old-price">59.00 FCFA</span>
                            <span class="product-price">49.00 FCFA</span>
                        </div><!-- End .price-box -->
                    </div><!-- End .product-details -->
                </div>
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="#">
                            <img src="{{asset('frontend/images/products/product-15.jpg')}}">
                        </a>
                        <div class="label-group">
                            <span class="product-label label-cut">27% OFF</span>
                        </div>
                        <div class="btn-icon-group">
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                        </div>
                        <a href="#" class="btn-quickview" title="Quick View">Quick View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="category.html" class="product-category">category</a>
                            </div>
                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                        </div>
                        <h2 class="product-title">
                            <a href="#">Product Short Name</a>
                        </h2>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <div class="price-box">
                            <span class="old-price">59.00 FCFA</span>
                            <span class="product-price">49.00 FCFA</span>
                        </div><!-- End .price-box -->
                    </div><!-- End .product-details -->
                </div>
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="#">
                            <img src="{{asset('frontend/images/products/product-16.jpg')}}">
                        </a>
                        <div class="label-group">
                            <span class="product-label label-cut">27% OFF</span>
                        </div>
                        <div class="btn-icon-group">
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                        </div>
                        <a href="#" class="btn-quickview" title="Quick View">Quick View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="category.html" class="product-category">category</a>
                            </div>
                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                        </div>
                        <h2 class="product-title">
                            <a href="#">Product Short Name</a>
                        </h2>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <div class="price-box">
                            <span class="old-price">59.00 FCFA</span>
                            <span class="product-price">49.00 FCFA</span>
                        </div><!-- End .price-box -->
                    </div><!-- End .product-details -->
                </div>
            </div>
        </section>

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
@endsection
        

       