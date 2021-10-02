<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Promo 24</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">
        
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('frontend/images/icons/favicon.ico')}}">
    
    
    <script type="text/javascript">
        WebFontConfig = {
            google: { families: [ 'Open+Sans:300,400,600,700,800','Poppins:300,400,500,600,700' ] }
        };
        (function(d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = '{{asset('frontend/js/webfont.js')}}';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>
    
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/fontawesome-free/css/all.min.css')}}">
</head>
<body>
    <div class="page-wrapper">
        <header class="header">
            <div class="header-top">
                <a href="#">
                    <img src="{{asset('frontend/images/banners/header_item.png')}}">
                    <h3>PortoPlus X Pro Only</h3>
                    <span class="skew-box product-price">199 FCFA</span>
                    <span class="old-price">299FCFA</span>
                    <span class="round-box">code: <strong>portoplusx</strong></span>
                </a>
            </div><!-- End .header-top -->

            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler" type="button">
                            <i class="icon-menu"></i>
                        </button>
                        <a href="index.html" class="logo">
                            <img src="{{asset('frontend/images/logo.png')}}" alt="Porto Logo">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <div class="header-search">
                            <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="q" id="q" placeholder="I'm searching for..." required>
                                    <div class="select-custom">
                                        <select id="cat" name="cat">
                                            <option value="">All Categories</option>
                                            <option value="4">Fashion</option>
                                            <option value="12">- Women</option>
                                            <option value="13">- Men</option>
                                            <option value="66">- Jewellery</option>
                                            <option value="67">- Kids Fashion</option>
                                            <option value="5">Electronics</option>
                                            <option value="21">- Smart TVs</option>
                                            <option value="22">- Cameras</option>
                                            <option value="63">- Games</option>
                                            <option value="7">Home &amp; Garden</option>
                                            <option value="11">Motors</option>
                                            <option value="31">- Cars and Trucks</option>
                                            <option value="32">- Motorcycles &amp; Powersports</option>
                                            <option value="33">- Parts &amp; Accessories</option>
                                            <option value="34">- Boats</option>
                                            <option value="57">- Auto Tools &amp; Supplies</option>
                                        </select>
                                    </div><!-- End .select-custom -->
                                    <button class="btn" type="submit"><i class="icon-magnifier"></i></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->

                    </div><!-- End .headeer-center -->

                    <div class="header-right">
                        <a href="#">
                            <div class="header-user">
                                <i class="icon-user-2"></i>
                                <div class="header-userinfo">
                                    <span>Bonjour</span>
                                    <h4>Mon Compte</h4>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="porto-icon"><i class="icon icon-heart"></i></a>

                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="minicart-icon"></i>
                                <span class="cart-count">2</span>
                            </a>

                            <div class="dropdown-menu" >
                                <div class="dropdownmenu-wrapper">
                                    <div class="dropdown-cart-header">
                                        <span>2 Items</span>

                                        <a href="cart.html">View Cart</a>
                                    </div><!-- End .dropdown-cart-header -->
                                    <div class="dropdown-cart-products">
                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="product.html">Woman Ring</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                     99.00 FCFA
                                                </span>
                                            </div><!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="product.html" class="product-image">
                                                    <img src="{{asset('frontend/images/products/cart/product-1.jpg')}}" alt="product">
                                                </a>
                                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-retweet"></i></a>
                                            </figure>
                                        </div><!-- End .product -->

                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="product.html">Woman Necklace</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    x 35.00 FCFA
                                                </span>
                                            </div><!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="product.html" class="product-image">
                                                    <img src="{{asset('frontend/images/products/cart/product-2.jpg')}}" alt="product">
                                                </a>
                                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-retweet"></i></a>
                                            </figure>
                                        </div><!-- End .product -->
                                    </div><!-- End .cart-product -->

                                    <div class="dropdown-cart-total">
                                        <span>Total</span>

                                        <span class="cart-total-price">134.0 FCFA</span>
                                    </div><!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="checkout-shipping.html" class="btn btn-block">Checkout</a>
                                    </div><!-- End .dropdown-cart-total -->
                                </div><!-- End .dropdownmenu-wrapper -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom">
                <div class="container">
                    <nav class="main-nav">
                       <div class="menu-depart">
                            <a href="category.html"><i class="icon-menu"></i>Le Meilleur</a>
                        </div>
                        <ul class="menu">
                            <li><a href="{{URL::to('/')}}" class="active">Accueil</a></li>
                            <li class="">
                                <a href="#">Villes</a>
                                <div class="megamenu">
                                    <div class="row row-sm">
                                        <div class="col-lg-3">
                                            <a href="#" class="nolink">Douala</a>
                                            <ul class="submenu">
                                                <li><a href="#">phamacie 1</a></li>
                                                <li><a href="#">magazin 1</a></li>
                                                <li><a href="#">boulengerie 1</a></li>
                                            </ul>
                                        </div><!-- End .col-lg-4 -->
                                        <div class="col-lg-3">
                                            <a href="#" class="nolink">Youande</a>
                                            <ul class="submenu">
                                                <li><a href="#">phamacie 2</a></li>
                                                <li><a href="#">magazin 2</a></li>
                                                <li><a href="#">boulengerie 2</a></li>
                                            </ul>
                                        </div><!-- End .col-lg-4 -->
                                        <div class="col-lg-3">
                                            <a href="#" class="nolink">Bafoussam</a>
                                            <ul class="submenu">
                                                <li><a href="#">phamacie 3</a></li>
                                                <li><a href="#">magazin 3</a></li>
                                                <li><a href="#">boulengerie 3</a></li>
                                                
                                            </ul>
                                        </div><!-- End .col-lg-4 -->

                                        <div class="col-lg-3 image-container">
                                            <img src="{{asset('frontend/images/menu-banner-1.jpg')}}" alt="Menu banner" class="product-promo">
                                        </div><!-- End .col-lg-4 -->
                                    </div><!-- End .row -->
                                </div><!-- End .megamenu -->
                            </li>
							<li><a href="{{URL::to('/aboutus')}}">A propos </a></li>
							<li><a href="{{URL::to('/contact')}}">Contact </a></li>
							<li><a href="{{URL::to('/client_categories')}}">Categories</a></li>
                            <li><a href="#" target="_blank">Nous suivre</a></li>
							
							
                        </ul>
                    </nav>

                    <div class="header-dropdowns">
                        <div class="header-dropdown">
                            <a href="#" class="link-seller">Become a Seller</a>
                        </div>
                        <div class="header-dropdown">
                            <a href="#">USD</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">USD</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropown -->

                        <div class="header-dropdown">
                            <a href="#">ENG</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">ENGLISH</a></li>
                                    <li><a href="#">FRENCH</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropown -->
                    </div><!-- End .header-left -->
                </div><!-- End .header-bottom -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->






















@yield('contenu')









@include('include.footerClient')

        </div><!-- End .page-wrapper -->
        
        <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->
        
        <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-retweet"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active"><a href="{{URL::to('/')}}">Accueil</a></li>
                    
                    <li>
                        <a href="product.html">Villes</a>
                        <ul>
                            <li>
                                <a href="#">Douala</a>
                                <ul>
                                   <li><a href="#">Phamacie 1</a></li>
                                    <li><a href="#">Magazin 1</a></li>
                                    <li><a href="#">Boulangerie 1</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Yaounde</a>
                                <ul>
                                   <li><a href="#">Phamacie 2</a></li>
                                    <li><a href="#">Magazin 2</a></li>
                                    <li><a href="#">Boulangerie 2</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Bafoussam</a>
                                <ul>
                                <li><a href="#">Phamacie 3</a></li>
                                    <li><a href="#">Magazin 3</a></li>
                                    <li><a href="#">Boulangerie 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                    <li><a href="{{URL::to('/aboutus')}}">A propos</a>
                       
                    </li>
                    <li><a href="{{URL::to('/contact')}}">Contact</a></li>
                    <li><a href="{{URL::to('/client_categories')}}">Categories</a></li>
                    <li><a href="#">Nous suivre</a></li>
                </ul>
            </nav>     <!-- End .mobile-nav -->
        
            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
        </div><!-- End .mobile-menu-container -->
        
        <!-- newsletter-popup-form -->
        <div class="newsletter-popup mfp-hide bg-img" id="newsletter-popup" style="background-image: url({{asset('frontend/images/newsletter_popup_bg.jpg')}})">
        <div class="newsletter-popup-content">
            <img src="{{asset('frontend/images/logo-black.png')}}" alt="Logo" class="logo-newsletter">
            <h2>ETRE LE PREMIER A CONNAITRE</h2>
            <p>Scrire a Notre newsletter pour recevoir les notifications pour les promo</p>
            <form action="#">
                <div class="input-group">
                    <input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Email address" required>
                    <input type="submit" class="btn" value="Go!">
                </div><!-- End .from-group -->
            </form>
            <div class="newsletter-subscribe">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="1">
                        Ne plus affiche cette boite de dialo
                    </label>
                </div>
            </div>
        </div><!-- End .newsletter-popup-content -->
        </div><!-- End .newsletter-popup -->
        
        <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>
        
        <!-- Plugins JS File -->
        <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
        <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('frontend/js/plugins.min.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.countdown/jquery.countdown.min.js')}}"></script>
        <script src="{{asset('frontend/js/plugins/isotope-docs.min.js')}}"></script>
        
        <!-- Main JS File -->
        <script src="{{asset('frontend/js/main_init.min.js')}}"></script>
        <script src="{{asset('frontend/js/main.min.js')}}"></script>
        </body>
        </html>