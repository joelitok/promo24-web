<nav aria-label="breadcrumb" class="breadcrumb-nav">
    <div class="container">
        <ol class="breadcrumb" style="color: black">
            <li class="breadcrumb-item"><a href="#"><i class="icon-home"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page" style="font-size: 1.8rem">
             <a href="{{URL::to('/')}}"style="color: black;bold:2px" ><strong>Accueil</strong></a> </li>
            <li class="breadcrumb-item active" aria-current="page" style="font-size: 1.8rem">
                 <a href="{{URL::to('/city_c')}}"  style="color: black" ><strong>Ville</strong></a> </li>
                <li class="breadcrumb-item active" aria-current="page" style="font-size: 1.8rem">
                  <a href="{{URL::to('/category_c')}}" style="color: black"><strong>Catégories</strong></a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="font-size: 1.8rem">
                         <a href="{{URL::to('/catalogue_c')}}"style="color: black"  ><strong>Catalogues</strong></a> </li>
        </ol>
    </div><!-- End .container -->
</nav>