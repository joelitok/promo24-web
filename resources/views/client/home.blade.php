@extends('layouts.clientLayouts.appClient')
@section('contenu')
 <main class="main">            
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page" style="font-size: 2.1rem">
                 <a href="#">Accueil</a> </li>
                <li class="breadcrumb-item active" aria-current="page" style="font-size: 2.1rem">
                     <a href="#">Ville</a> </li>
                    <li class="breadcrumb-item active" aria-current="page" style="font-size: 2.1rem">
                      <a href="#">Catégories</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="font-size: 2.1rem">
                             <a href="#">Catalogues</a> </li>
            </ol>
        </div><!-- End .container -->
    </nav>

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
                




<section class="service-section mb-4">
    <form id="regForm" action="/action_page.php">
       
        <!-- One "tab" for each step in the form: -->
        <div class="tab"> 
        <h1>Pour consulter Vos promos commencé par selectionné votre ville et catégories puis cliqué sur suivant.</h1>
   
            <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
            <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
             <p>  <select name="fname" oninput="this.className = ''" name="fname">
            <option > option 1</option>
            <option > option 2</option>
            </select> </p> 
        </div>
         <div class="tab">
             <h1> Sélection votre catalogue </h1>
          
            <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
            <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
        </div>
        <div class="tab">Birthday:
            <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
            <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
            <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
        </div>
        <div class="tab">Login Info:
            <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
            <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
        </div>
        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Précédent</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Suivant</button>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </form>



</section>





               








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
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-6"></div>
</main><!-- End .main -->








@endsection
        

       