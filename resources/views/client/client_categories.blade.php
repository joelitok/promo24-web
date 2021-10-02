@extends('layouts.clientLayouts.appClient')
@section('contenu')
<main class="main">            
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">
                CATEGORIES</li>
            </ol>
        </div><!-- End .container -->
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-xl-5col-4">
                <div class="banner-product bg-grey banner-cat" style="background-image: url('{{asset('frontend/images/banners/category_banner.jpg')}}');background-position : 50%;">
                    <div class="content-left text-right">
                        <h2>SMART</h2>
                        <h3>Phone Deals</h3>
                    </div>
                    <div class="ml-3 content-right">
                        <div class="skew-box-group">
                            <span class="skew-box">Exclusive COUPON</span>
                            <h3 class="sale-off skew-box"><span>100FCFA</span>off</h3>
                        </div>
                        <button class="btn">View All Now</button>
                    </div>
                </div>

                <nav class="toolbox mb-4">
                    <div class="toolbox-left">
                        <div class="toolbox-item toolbox-sort">
                            <div class="select-custom">
                                <select name="orderby" class="form-control">
                                    <option value="menu_order" selected="selected">Default sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by newness</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                            </div><!-- End .select-custom -->

                            <a href="#" class="sorter-btn" title="Set Ascending Direction"><span class="sr-only">Set Ascending Direction</span></a>
                        </div><!-- End .toolbox-item -->
                    </div><!-- End .toolbox-left -->

                    <div class="toolbox-item toolbox-show">
                        <label>Showing 1–9 of 60 results</label>
                    </div><!-- End .toolbox-item -->

                    <div class="layout-modes">
                        <a href="category.html" class="layout-btn btn-grid active" title="Grid">
                            <i class="icon-mode-grid"></i>
                        </a>
                        <a href="category-list.html" class="layout-btn btn-list" title="List">
                            <i class="icon-mode-list"></i>
                        </a>
                    </div><!-- End .layout-modes -->
                </nav>

                <div class="row row-sm">
                    <div class="col-6 col-md-4 col-lg-4">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="{{asset('frontend/images/products/product-1.jpg')}}">
                                </a>
                                <div class="label-group">
                                    <span class="product-label label-cut">27% off</span>
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
                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">59.00FCFA</span>
                                    <span class="product-price">49.00FCFA</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-4">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="{{asset('frontend/images/products/product-2.jpg')}}">
                                </a>
                                <div class="label-group">
                                    <span class="product-label label-cut">27% off</span>
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
                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">59.00FCFA</span>
                                    <span class="product-price">49.00FCFA</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-4">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="{{asset('frontend/images/products/product-3.jpg')}}">
                                </a>
                                <div class="label-group">
                                    <span class="product-label label-cut">27% off</span>
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
                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">59.00FCFA</span>
                                    <span class="product-price">49.00FCFA</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-4">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="{{asset('frontend/images/products/product-4.jpg')}}">
                                </a>
                                <div class="label-group">
                                    <span class="product-label label-cut">27% off</span>
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
                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">59.00FCFA</span>
                                    <span class="product-price">49.00FCFA</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-4">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="{{asset('frontend/images/products/product-5.jpg')}}">
                                </a>
                                <div class="label-group">
                                    <span class="product-label label-cut">27% off</span>
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
                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">59.00FCFA</span>
                                    <span class="product-price">49.00FCFA</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-4">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="{{asset('frontend/images/products/product-6.jpg')}}">
                                </a>
                                <div class="label-group">
                                    <span class="product-label label-cut">27% off</span>
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
                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">59.00FCFA</span>
                                    <span class="product-price">49.00FCFA</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-4">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="{{asset('frontend/images/products/product-7.jpg')}}">
                                </a>
                                <div class="label-group">
                                    <span class="product-label label-cut">27% off</span>
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
                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">59.00FCFA</span>
                                    <span class="product-price">49.00FCFA</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-4">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="{{asset('frontend/images/products/product-8.jpg')}}">
                                </a>
                                <div class="label-group">
                                    <span class="product-label label-cut">27% off</span>
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
                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">59.00FCFA</span>
                                    <span class="product-price">49.00FCFA</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-4">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="{{asset('frontend/images/products/product-9.jpg')}}">
                                </a>
                                <div class="label-group">
                                    <span class="product-label label-cut">27% off</span>
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
                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">59.00FCFA</span>
                                    <span class="product-price">49.00FCFA</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                    </div>
                </div>

                <nav class="toolbox toolbox-pagination">
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
                </nav>
            </div><!-- End .col-lg-9 -->

            <aside class="sidebar-shop col-lg-3 col-xl-5col-1 order-lg-first">
                <div class="sidebar-wrapper">
                    <div class="widget">
                        <h3 class="widget-title">
                            <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Electronics</a>
                        </h3>

                        <div class="collapse show" id="widget-body-2">
                            <div class="widget-body">
                                <ul class="cat-list">
                                    <li><a href="#">Smart TVs</a></li>
                                    <li><a href="#">Cameras</a></li>
                                    <li><a href="#">Head Phones</a></li>
                                    <li><a href="#">Games</a></li>
                                </ul>
                            </div><!-- End .widget-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .widget -->

                    <div class="widget">
                        <h3 class="widget-title">
                            <a data-toggle="collapse" href="#widget-body-3" role="button" aria-expanded="true" aria-controls="widget-body-3">Price</a>
                        </h3>

                        <div class="collapse show" id="widget-body-3">
                            <div class="widget-body">
                                <form action="#">
                                    <div class="price-slider-wrapper">
                                        <div id="price-slider"></div><!-- End #price-slider -->
                                    </div><!-- End .price-slider-wrapper -->

                                    <div class="filter-price-action">
                                        <div class="filter-price-text">
                                            Price:
                                            <span id="filter-price-range"></span>
                                        </div><!-- End .filter-price-text -->
                                        <button type="submit" class="btn btn-primary">Filter</button>
                                    </div><!-- End .filter-price-action -->
                                </form>
                            </div><!-- End .widget-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .widget -->

                    <div class="widget">
                        <h3 class="widget-title">
                            <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-4">Sizes</a>
                        </h3>

                        <div class="collapse show" id="widget-body-4">
                            <div class="widget-body">
                                <ul class="cat-list">
                                    <li><a href="#">Extra Large</a></li>
                                    <li><a href="#">Large</a></li>
                                    <li><a href="#">Medium</a></li>
                                    <li><a href="#">Small</a></li>
                                </ul>
                            </div><!-- End .widget-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .widget -->

                    <div class="widget">
                        <h3 class="widget-title">
                            <a data-toggle="collapse" href="#widget-body-6" role="button" aria-expanded="true" aria-controls="widget-body-6">Color</a>
                        </h3>

                        <div class="collapse show" id="widget-body-6">
                            <div class="widget-body">
                                <ul class="config-swatch-list">
                                    <li class="active"><a href="#" style="background-color: #6085a5;"></a></li>
                                    <li><a href="#" style="background-color: #ab6e6e;"></a></li>
                                    <li><a href="#" style="background-color: #b19970;"></a></li>
                                    <li><a href="#" style="background-color: #11426b;"></a></li>
                                    <li><a href="#" style="background-color: #f0f0f0"></a></li>
                                    <li><a href="#" style="background-color: #83c2bd;"></a></li>
                                    <li><a href="#" style="background-color: #979c1c;"></a></li>
                                    <li><a href="#" style="background-color: #d2ae8f;"></a></li>
                                </ul>
                            </div><!-- End .widget-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .widget -->

                    <div class="widget">
                        <h3 class="widget-title mb-1">Featured Products</h3>
                        <div class="widget-body">
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="{{asset('frontend/images/products/product-1.jpg')}}">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="old-price">59.00FCFA</span>
                                        <span class="product-price">49.00FCFA</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="{{asset('frontend/images/products/product-2.jpg')}}">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="old-price">59.00FCFA</span>
                                        <span class="product-price">49.00FCFA</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                            <div class="product-default left-details product-widget">
                                <figure>
                                    <a href="product.html">
                                        <img src="{{asset('frontend/images/products/product-3.jpg')}}">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="old-price">59.00FCFA</span>
                                        <span class="product-price">49.00FCFA</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div><!-- End .widget-body -->
                    </div><!-- End .widget -->

                    <div class="widget">
                        <h3 class="widget-title">Custom HTML Block</h3>
                        <h4 class="widget-subtitle mb-1">This is a custom sub-title</h4>
                        <div class="widget-body">
                            <p>Lorem ipsum dolor sit amet, consectetur elitad adipiscing Cras non placerat mi. </p>
                        </div>
                    </div>
                </div><!-- End .sidebar-wrapper -->
            </aside><!-- End .col-lg-3 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-6"></div>
</main><!-- End .main -->
@endsection