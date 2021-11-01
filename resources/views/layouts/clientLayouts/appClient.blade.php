<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Promo 24</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="promo24">
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
    <link rel="stylesheet" href="{{asset('frontend/form/css/style.css')}}">
   
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/fontawesome-free/css/all.min.css')}}">
</head>
<body>
    <div class="page-wrapper">
        <header class="header">
             <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler" type="button">
                            <i class="icon-menu"></i>
                        </button>
                        <a href="{{URL::to('/')}}" class="logo">
                            <img src="{{asset('frontend/images/logo-promo24-v2.jpg')}}" alt="Promo 24 Logo">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <div class="header-search">
                            <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                            <form action="{{URL::to('/search')}}" method="get">
                                <div class="header-search-wrapper">
                                    <input type="submit" class="form-control" name="search" id="search" placeholder="rechercher.." required>
                                    <div class="select-custom">
                                        <select id="cat" name="cat">
                                            @if($categories)
                                            @foreach ($categories as $category)
                                             <option >{{$category->category_name}}</option>
                                            @endforeach
                                            @endif
                                            
                                            
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
                                            @if($shops)
                                              @foreach ($shops as $shop)
                                              <ul class="submenu">
                                            @if($shop->shop_city_name=='Douala')
                                            <li><a href="#"  onclick="window.location='{{url('/shop_city/'.$shop->id)}}'">{{$shop->shop_name}}</a></li>
                                        </ul>
                                            @endif
                                              @endforeach   
                                            @endif
                                            
                                        </div>
                                        
                                        <div class="col-lg-3">
                                            <a href="#" class="nolink">Bafoussam</a>
                                            @if($shops)
                                              @foreach ($shops as $shop)
                                              <ul class="submenu">
                                            @if($shop->shop_city_name=='Bafoussam')
                                               <li><a   onclick="window.location='{{url('/shop_city/'.$shop->id)}}'">{{$shop->shop_name}}</a></li>
                                              </ul>
                                            @endif
                                              @endforeach   
                                            @endif
                                            
                                        </div>
                                        <div class="col-lg-3">
                                            <a href="#" class="nolink">Yaoundé</a>
                                            @if($shops)
                                              @foreach ($shops as $shop)
                                              <ul class="submenu">
                                            @if($shop->shop_city_name=='Yaoundé')
                                            <li><a  onclick="window.location='{{url('/shop_city/'.$shop->id)}}'">{{$shop->shop_name}}</a></li>
                                        </ul>
                                            @endif
                                              @endforeach   
                                            @endif
                                            
                                        </div>



                                   

                                        <div class="col-lg-3 image-container">
                                            <img src="{{asset('frontend/images/menu-banner-1.jpg')}}" alt="Menu banner" class="product-promo">
                                        </div><!-- End .col-lg-4 -->
                                    </div><!-- End .row -->
                                </div><!-- End .megamenu -->
                            </li>
							<li><a href="{{URL::to('/aboutus')}}">A propos </a></li>
							<li><a href="{{URL::to('/contact')}}">Contact </a></li>
							<li><a href="{{URL::to('/client_categories')}}">Catégories</a></li>
                            <li><a href="#" target="_blank">Nous suivre</a></li>
							
							
                        </ul>
                    </nav>

                    <div class="header-dropdowns">
                        <div class="header-dropdown">
                            <a href="#" style="font-size: 2.1rem">ANGLAIS</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#" style="font-size: 2.1rem">ANGLAIS</a></li>
                                    <li><a href="#" style="font-size: 2.1rem">FRANCAIS</a></li>
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
                <a href="{{URL::to('/')}}" class="logo">
                    <img src="{{asset('frontend/images/logo-promo24-v2.jpg')}}" alt="Promo 24 Logo">
                </a>
                <ul class="mobile-menu">
                    <li class="active"><a href="#">Accueil</a></li>
                    
                    <li>
                        <a href="#">Villes</a>
                        <ul>
                              
                            <li>
                                <a href="#">Douala</a>
                                <ul>
                                    @if($shops)
                                    @foreach ($shops as $shop)
                                    @if($shop->shop_city_name=='Douala')
                                    <li><a onclick="window.location='{{url('/shop_city/'.$shop->id)}}'" >{{$shop->shop_name}}</a></li>
                                    @endif
                                    @endforeach 
                                    @endif
                                </ul>
                               
                            </li>
                            <li>
                                <a href="#">Yaoundé</a>
                                <ul>
                                    @if($shops)
                                    @foreach ($shops as $shop)
                                    @if($shop->shop_city_name=='Yaoundé')
                                    <li><a onclick="window.location='{{url('/shop_city/'.$shop->id)}}'">{{$shop->shop_name}}</a></li>
                                    @endif
                                    @endforeach 
                                    @endif
                                </ul>
                               
                            </li>
                            <li>
                                <a href="#">Bafoussam</a>
                                <ul>
                                    @if($shops)
                                    @foreach ($shops as $shop)
                                    @if($shop->shop_city_name=='Bafoussam')
                                    <li><a onclick="window.location='{{url('/shop_city/'.$shop->id)}}'" >{{$shop->shop_name}}</a></li>
                                    @endif
                                    @endforeach 
                                    @endif
                                </ul>
                            </li>
                        </ul>
                    </li>
                   
                    <li><a href="{{URL::to('/aboutus')}}">A propos</a></li>
                    <li><a href="{{URL::to('/contact')}}">Contact</a></li>
                    <li><a href="{{URL::to('/client_categories')}}">Catégories</a></li>
                    <li><a href="#">Nous suivre</a></li>
               <li>
                
                    <a href="#">TRADUIRE</a>
                        <ul>
                            <li><a href="#">ANGLAIS</a></li>
                            <li><a href="#">FRANCAIS</a></li>
                        </ul>
               </li>
                </ul>
            </nav>     


















































        
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
            <img src="{{asset('frontend/images/logo-promo24-v2.jpg')}}" alt="Logo" class="logo-newsletter">
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
        <script src="{{asset('frontend/form/js/form.js')}}"></script>
        
        <!-- Main JS File -->
        <script src="{{asset('frontend/js/main_init.min.js')}}"></script>
        <script src="{{asset('frontend/js/main.min.js')}}"></script>

        

        <script type="text/javascript">
            $(document).ready(function(){
        
                $(document).on('change','#city',function(){
                    // console.log("hmm its change");
                         var city_id=$(this).val();
			           //  console.log(city_id);
                    var op = " ";
                    var div = $(this).parent();;
                $.ajax({
                    type:'get',
                    url:'{!!URL::to('categories_data')!!}',
                    data:{'id':city_id},
                    success:function(data){
                    console.log('success');
                    console.log(data);

                    
					//console.log(data.length);
					op+='<option style="font-family: Raleway;" value="0" selected disabled> - selection la categorie-</option>';
					for(var i=0;i<data.length;i++){
					op+='<option style="font-family: Raleway;" value="'+data[i].id+'">'+data[i].category_name+'</option>';

                    div.find('#category_name').html(" ");
				    div.find('#category_name').append(op);
                    }
                },
                        error:function(){
                        console.log('une erreur c est produire')
                        }
                    });


                     });
                    });


        $(document).ready(function(){
        
        $(document).on('change','#category_name',function(){
            // console.log("hmm its change");
                 var id=$(this).val();
               //  console.log(city_id);
            var op = " ";
            var div = $(this).parent();;
            $.ajax({
            type:'get',
            url:'{!!URL::to('catalogues_data')!!}',
            data:{'id':id},

            success:function(data){
            console.log('success');
            console.log(data);

            
            //console.log(data.length);
            op+='<option style="font-family: Raleway;" value="0" selected disabled> - selection le catalogue-</option>';
            for(var i=0;i<data.length;i++){
            op+='<option style="font-family: Raleway;" value="'+data[i].id+'">'+data[i].catalogue_name+'</option>';

            div.find('#catalogue_name').html(" ");
            div.find('#catalogue_name').append(op);
            }
        },
                error:function(){
                console.log('une erreur produires')
                }
            });


             });
            });
               
        </script>






        
        </body>
        </html>