@extends('layouts.clientLayouts.appClient')
@section('contenu')
<main class="main">          
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">
                Produit</li>
            </ol>
        </div><!-- End .container -->
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                @if($product)
                <div class="product-single-container product-single-default">
                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <div class="product-single-gallery">
                                <div class="product-slider-container product-item">
                                    <div class="product-single-carousel owl-carousel owl-theme">
                                        <div class="product-item">
                                             <img class="product-single-image" src="/storage/product_images/{{$product->product_image}}" data-zoom-image="/storage/product_images/{{$product->product_image}}"/>
                                            {{-- <img class="product-single-image" src="{{ URL::to('/') }}/product_images/{{ $product->product_image}}" data-zoom-image="{{ URL::to('/') }}/product_images/{{ $product->product_image}}"/> --}}
                                        </div>
                    
                                    </div>
                                    <!-- End .product-single-carousel -->
                                    <span class="prod-full-screen">
                                        <i class="icon-plus"></i>
                                    </span>
                                </div>
                                <div class="prod-thumbnail row owl-dots" id='carousel-custom-dots'>
                                    <div class="col-3 owl-dot">
                                        {{-- <img src="/{{ URL::to('/') }}/storage/product_images/{{$product->product_image}}"/> --}}
                                        <img src="/storage/product_images/{{ $product->product_image}}"/>
                                        
                                    </div>
                                </div>
                            </div><!-- End .product-single-gallery -->
                        </div><!-- End .col-lg-7 -->

                        <div class="col-lg-7 col-md-6">
                            <div class="product-single-details">

                                <h1 class="product-title">{{$product->product_name}}</h1>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->

                                    <a href="#" class="rating-link">( 6 Reviews )</a>
                                </div><!-- End .product-container -->

                                <div class="price-box">
                                    <span class="old-price">1000 FCFA</span>
                                    <span class="product-price">{{$product->product_price}} FCFA</span>
                                </div><!-- End .price-box -->

                                <div class="product-desc">
                                    <p>{{$product->product_description}}</p>
                                </div><!-- End .product-desc -->

                                <div class="product-single-share">
                                    <label>Partage:</label>
                                    <div class="social-icons">
                                        <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                                        <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                                        <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
                                   
                                    </div>
                                    
                                    <!-- www.addthis.com share plugin-->
                                    <div class="addthis_inline_share_toolbox"></div>
                                </div><!-- End .product single-share -->
                            </div><!-- End .product-single-details -->
                        </div><!-- End .col-lg-5 -->
                    </div><!-- End .row -->
                </div><!-- End .product-single-container -->
                    
                @endif

                <div class="product-single-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="false">Description</a>
                        </li>
                      
                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-reviews" data-toggle="tab" href="#product-reviews-content" role="tab" aria-controls="product-reviews-content" aria-selected="false">Revision</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                            <div class="product-desc-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                                <ul>
                                    <li><i class="icon-ok"></i>Any Product types that You want - Simple, Configurable</li>
                                    <li><i class="icon-ok"></i>Downloadable/Digital Products, Virtual Products</li>
                                    <li><i class="icon-ok"></i>Inventory Management with Backordered items</li>
                                </ul>
                                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            </div><!-- End .product-desc-content -->
                        </div><!-- End .tab-pane -->
                        <div class="tab-pane fade" id="product-tags-content" role="tabpanel" aria-labelledby="product-tab-tags">
                            <div class="product-tags-content">
                                <form action="#">
                                    <h4>Add Your Tags:</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-sm" required>
                                        <input type="submit" class="btn btn-primary" value="Add Tags">
                                    </div><!-- End .form-group -->
                                </form>
                                <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                            </div><!-- End .product-tags-content -->
                        </div><!-- End .tab-pane -->

                        <div class="tab-pane fade" id="product-reviews-content" role="tabpanel" aria-labelledby="product-tab-reviews">
                            <div class="product-reviews-content">
                                <div class="collateral-box">
                                    <ul>
                                        <li>Be the first to review this product</li>
                                    </ul>
                                </div><!-- End .collateral-box -->
                            </div><!-- End .product-reviews-content -->
                        </div><!-- End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .product-single-tabs -->
            </div><!-- End .col-lg-9 -->

            <div class="sidebar-overlay"></div>
            <div class="sidebar-toggle"><i class="icon-right-open"></i></div>
            <aside class="sidebar-product col-lg-2 padding-left-lg mobile-sidebar">
                <div class="sidebar-wrapper">
                    <div class="widget widget-sold">
                        <h3 class="widget-title">
                            <a data-toggle="collapse" href="#widget-body-1" role="button" aria-expanded="true" aria-controls="widget-body-1">Disponible</a>
                        </h3>

                        <div class="collapse show" id="widget-body-1">
                            <div class="widget-body ">
                                <h3>{{$product->product_category}}</h3>
                                <h4>Cameroun</h4>

                                <i class="fa fa-info-circle"></i><span class="span-info">97.4%</span><span>commentaire</span>

                                <a href="#">gallerie</a>
                            </div>
                        </div><!-- End .collapse -->
                    </div><!-- End .widget -->

                    <div class="widget">
                        <h3 class="widget-title">
                            <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Autres produits</a>
                        </h3>

                        <div class="collapse show" id="widget-body-2">
                            <div class="widget-body">
                                <div class="product-intro">
                                   @if($products)
                                   @foreach ($products as $product)
                                   <div class="product-default left-details product-widget">
                                    <figure>
                                        <a href="#">
                                             <img src="/storage/product_images/{{$product->product_image}}"> 
                                            {{-- <img src="{{ URL::to('/') }}/product_images/{{ $product->product_image}}" alt=""> --}}
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="" onclick="window.location='{{url('/product_detail/'.$product->id.'/'.$product->product_category)}}'">  {{$product->product_name}}</a>
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
                                   @endforeach
                                   @endif
                                </div>
                            </div><!-- End .widget-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .widget -->
                </div>
            </aside><!-- End .col-md-3 -->
        </div>

        <div class="mb-lg-4"></div><!-- margin -->
    </div><!-- End .container -->
</main><!-- End .main -->
    
@endsection