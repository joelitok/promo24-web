<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="promo 24">
   
  <title>promo 24</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('backend/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('backend/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('backend/css/vendor.bundle.addons.css')}}">
  

  <!-- fontawesome of icon add 11/10/2021-->
  {{-- <link rel="stylesheet" href="{{asset('backend/demo-files/demo.css')}}">--}}
	<link rel="stylesheet" href="{{asset('backend/themify-icons.css')}}"> 
  {{-- <link rel="stylesheet" href="{{asset('backend/ie7/ie7.css')}}">
  <link rel="stylesheet" href="{{asset('backend/ie7/ie7.js')}}"> --}}
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('backend/images/logo-promo24-v2.jpg')}}" />


</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a   class="navbar-brand brand-logo mr-5" href="#"><img src="{{asset('backend/images/logo-promo24-v2.jpg')}}" class="mr-2" width="200px" height="200px"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-layout-grid2"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{asset('backend/images/logo-promo24-v2.jpg')}}" alt="profile" />
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-layout-grid2"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ti-home menu-icon"></i>
              <span class="menu-title">Tableau de bord</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="ti-clipboard menu-icon"></i>
              <span class="menu-title">Affichage</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/cities')}}">Villes</a></li>
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/shops')}}">Boutiques</a></li>
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/categories')}}">Cat&eacute;gories</a></li>
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/list_products')}}">Produits</a></li>
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/list_promo_products')}}">Produits en promotions</a></li>
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/sliders')}}">Slides</a></li>
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/catalogues')}}">Catalogues</a></li>

               <!-- <li> &agrave;&Agrave;&aelig;&egrave;&eacute;&copy;</li>  -->
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="ti-layout menu-icon"></i>
              <span class="menu-title">Cr&eacute;ation</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
               <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/new_city')}}">Ville</a></li>
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/new_shop')}}">Boutique</a></li>
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/new_category')}}">Cat&eacute;gorie</a></li>
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/new_product')}}">Produits</a></li>
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/new_product_promotion')}}">Produits de promotion</a></li>
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/new_slider')}}">Slide</a></li>
                <li class="nav-item"><a class="nav-link" href="{{URL::to('/new_catalogue')}}">Catalogue</a></li>
            
             
              </ul>
            </div>
          </li>
        </ul>
      </nav>



      @yield('contenu')




    </div>
    <!-- page-body-wrapper ends -->
  </div>
 



  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('backend/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('backend/js/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('backend/js/off-canvas.js')}}"></script>
  <script src="{{asset('backend/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('backend/js/template.js')}}"></script>
  <script src="{{asset('backend/js/settings.js')}}"></script>
  <script src="{{asset('backend/js/todolist.js')}}"></script>
  <script src="{{asset('backend/js/bootbox.min.js')}}"></script>
  <!-- endinject -->

  <script>
    $(document).on("click", "#delete", function(e){
    e.preventDefault();
    var link = $(this).attr("href");
    bootbox.confirm("Voulez-vous vraiment supprimer cet element ?", function(confirmed){
      if (confirmed){
          window.location.href = link;
          
        };
      });
    });
  </script>






  <!-- Custom js for this page-->
  <script src="{{asset('backend/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>

