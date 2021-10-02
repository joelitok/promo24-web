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
                    <div class="home-slide" style="background-image: url('{{asset('frontend/images/slider/home_slide1.jpg')}}');">
                        <div class="slide-content">
                            <h2 class="text-right">electronic<br>deals</h2>
                            <div class="skew-box-group">
                                <span class="skew-box">Exclusive COUPON</span>
                                <h3 class="sale-off skew-box"><span>100FCFA</span>off</h3>
                            </div>
                            <button class="btn">View All Now</button>
                        </div>
                        <p>* Only 200 Available</p>
                    </div>

                    <div class="home-slide" style="background-image: url('{{asset('frontend/images/slider/home_slide2.jpg')}}');">
                        <div class="slide-content content-left">
                            <h2 class="text-left">Top brands<br>smartphones</h2>
                            <div class="skew-box-group">
                                <span class="skew-box">STARTING FROM</span>
                                <span class="skew-box">199 FCFA</span>
                            </div>
                            <button class="btn">View All Now</button>
                        </div>                                
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-slider owl-carousel owl-theme" data-toggle="owl">
                    <div class="product-slide">
                        <h3>Flash Deals</h3>
                        <div class="product-default">
                            <figure>
                                <a href="product.html">
                                    <img src="{{asset('frontend/images/products/product-deal.jpg')}}">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h2 class="product-title">
                                    <a href="product.html">1080p Wifi IP Camera</a>
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
                        <div class="count-down-panel text-center">
                            <h4>OFFER ENDS IN:
                                <span class="countdown" data-plugin-countdown="" data-plugin-options="{'date': '2020/01/01 00:00:00', 'numberClass': 'font-weight-extra-bold'}"><span class="days"><span class=" font-weight-extra-bold">237</span> DAY<div class="d-inline text-uppercase">s,</div></span> <span class="hours"><span class=" font-weight-extra-bold">20:</span> </span> <span class="minutes"><span class=" font-weight-extra-bold">26:</span> </span> <span class="seconds"><span class=" font-weight-extra-bold">06</span> </span> </span>
                            </h4>
                        </div>
                    </div>
                    <div class="product-slide">
                        <h3>Flash Deals</h3>
                        <div class="product-default">
                            <figure>
                                <a href="product.html">
                                    <img src="{{asset('frontend/images/products/product-deal.jpg')}}">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h2 class="product-title">
                                    <a href="product.html">1080p Wifi IP Camera</a>
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
                                <a href="product.html">
                                    <img src="{{asset('frontend/images/products/product-deal.jpg')}}">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h2 class="product-title">
                                    <a href="product.html">1080p Wifi IP Camera</a>
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
                        <h3 class="service-title">free shipping & return</h3>
                        <p>Free shipping on all orders over 99.</ FCFAp>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="service-widget">
                    <i class="service-icon icon-money"></i>
                    <div class="service-content">
                        <h3 class="service-title">money back guarantee</h3>
                        <p>100% money back guarantee</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="service-widget">
                    <i class="service-icon icon-support"></i>
                    <div class="service-content">
                        <h3 class="service-title">online support 24/7</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="service-widget">
                    <i class="service-icon icon-secure-payment"></i>
                    <div class="service-content">
                        <h3 class="service-title">Secure Payment</h3>
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
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="product.html">
                            <img src="{{asset('frontend/images/products/product-1.jpg')}}">
                        </a>
                        <div class="label-group">
                            <span class="product-label label-cut">27% OFF</span>
                        </div>
                        <div class="btn-icon-group">
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="category.html" class="product-category">category</a>
                            </div>
                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                        </div>
                        <h2 class="product-title">
                            <a href="product.html">Product Short Name</a>
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
                        <a href="product.html">
                            <img src="{{asset('frontend/images/products/product-2.jpg')}}">
                        </a>
                        <div class="label-group">
                            <span class="product-label label-cut">27% OFF</span>
                        </div>
                        <div class="btn-icon-group">
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="category.html" class="product-category">category</a>
                            </div>
                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                        </div>
                        <h2 class="product-title">
                            <a href="product.html">Product Short Name</a>
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
                        <a href="product.html">
                            <img src="{{asset('frontend/images/products/product-3.jpg')}}">
                        </a>
                        <div class="label-group">
                            <span class="product-label label-cut">27% OFF</span>
                        </div>
                        <div class="btn-icon-group">
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="category.html" class="product-category">category</a>
                            </div>
                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                        </div>
                        <h2 class="product-title">
                            <a href="product.html">Product Short Name</a>
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
                        <a href="product.html">
                            <img src="{{asset('frontend/images/products/product-4.jpg')}}">
                        </a>
                        <div class="label-group">
                            <span class="product-label label-cut">27% OFF</span>
                        </div>
                        <div class="btn-icon-group">
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="category.html" class="product-category">category</a>
                            </div>
                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                        </div>
                        <h2 class="product-title">
                            <a href="product.html">Product Short Name</a>
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
                        <a href="product.html">
                            <img src="{{asset('frontend/images/products/product-5.jpg')}}">
                        </a>
                        <div class="label-group">
                            <span class="product-label label-cut">27% OFF</span>
                        </div>
                        <div class="btn-icon-group">
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="category.html" class="product-category">category</a>
                            </div>
                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                        </div>
                        <h2 class="product-title">
                            <a href="product.html">Product Short Name</a>
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
                        <a href="product.html">
                            <img src="{{asset('frontend/images/products/product-6.jpg')}}">
                        </a>
                        <div class="label-group">
                            <span class="product-label label-cut">27% OFF</span>
                        </div>
                        <div class="btn-icon-group">
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="category.html" class="product-category">category</a>
                            </div>
                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                        </div>
                        <h2 class="product-title">
                            <a href="product.html">Product Short Name</a>
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

        <div class="row row-sm">
            <div class="col-lg-6">
                <div class="banner-product bg-grey" style="background-image: url('{{asset('frontend/images/products/product-banner1.jpg')}}');background-position : 50%;">
                    <h2>ACTION <br>CAMERAS</h2>
                    <div class="ml-3 primary-background">
                        <h3 class="skew-box">Starting from</h3>
                        <h4 class="skew-box"><span class=" product-price">399</ FCFAspan><span class="old-price">499</ FCFAspan></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner-product bg-grey" style="background-image: url('{{asset('frontend/images/products/product-banner2.jpg')}}');
                    background-position : 48% 10%;">
                    <h2>FOR ALL <br>STYLES</h2>
                    <div class="ml-3 secondary-background">
                        <h3 class="skew-box">Starting from</h3>
                        <h4 class="skew-box"><span class=" product-price">399</ FCFAspan><span class="old-price">499</ FCFAspan></h4>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

 

    <div class="container">
        <section class="product-panel mt-6">
            <div class="section-title">
                <h2>Fruits</h2>
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
                        <a href="product.html">
                            <img src="{{asset('frontend/images/products/product-13.jpg')}}">
                        </a>
                        <div class="label-group">
                            <span class="product-label label-cut">27% OFF</span>
                        </div>
                        <div class="btn-icon-group">
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="category.html" class="product-category">category</a>
                            </div>
                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                        </div>
                        <h2 class="product-title">
                            <a href="product.html">Product Short Name</a>
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
                        <a href="product.html">
                            <img src="{{asset('frontend/images/products/product-12.jpg')}}">
                        </a>
                        <div class="label-group">
                            <span class="product-label label-cut">27% OFF</span>
                        </div>
                        <div class="btn-icon-group">
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="category.html" class="product-category">category</a>
                            </div>
                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                        </div>
                        <h2 class="product-title">
                            <a href="product.html">Product Short Name</a>
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
                        <a href="product.html">
                            <img src="{{asset('frontend/images/products/product-13.jpg')}}">
                        </a>
                        <div class="label-group">
                            <span class="product-label label-cut">27% OFF</span>
                        </div>
                        <div class="btn-icon-group">
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="category.html" class="product-category">category</a>
                            </div>
                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                        </div>
                        <h2 class="product-title">
                            <a href="product.html">Product Short Name</a>
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
                        <a href="product.html">
                            <img src="{{asset('frontend/images/products/product-14.jpg')}}">
                        </a>
                        <div class="label-group">
                            <span class="product-label label-cut">27% OFF</span>
                        </div>
                        <div class="btn-icon-group">
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="category.html" class="product-category">category</a>
                            </div>
                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                        </div>
                        <h2 class="product-title">
                            <a href="product.html">Product Short Name</a>
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
                        <a href="product.html">
                            <img src="{{asset('frontend/images/products/product-15.jpg')}}">
                        </a>
                        <div class="label-group">
                            <span class="product-label label-cut">27% OFF</span>
                        </div>
                        <div class="btn-icon-group">
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="category.html" class="product-category">category</a>
                            </div>
                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                        </div>
                        <h2 class="product-title">
                            <a href="product.html">Product Short Name</a>
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
                        <a href="product.html">
                            <img src="{{asset('frontend/images/products/product-16.jpg')}}">
                        </a>
                        <div class="label-group">
                            <span class="product-label label-cut">27% OFF</span>
                        </div>
                        <div class="btn-icon-group">
                            <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="category.html" class="product-category">category</a>
                            </div>
                            <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                        </div>
                        <h2 class="product-title">
                            <a href="product.html">Product Short Name</a>
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
                    <p>check new arrivals</p>
                    <h2>Explore Smartphones</h2>
                </div>
                <div class="skew-box-group">
                    <span class="skew-box">Exclusive COUPON</span>
                    <h3 class="sale-off skew-box"><span>200</ FCFAspan>off</h3>
                </div>
                <div class="">
                    <button class="btn">view all now</button>
                </div>
            </div>
        </div>
        
    </div>
    
    <section class="container mt-3 mb-7" id="topBrands">
        <div class="section-title mb-6">
            <h2>Top Brands</h2>
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
        

       