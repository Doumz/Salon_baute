<!doctype html>
<html lang="en">

  <head>
    <title>{{ env('APP_NAME')}} &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css"> 
    <link rel="stylesheet" href="css/yBox.min.css">
    <link rel="stylesheet" href="css/yBox.css">
    <link href="path/to/lightbox.css" rel="stylesheet" />

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
   <div class=" align-items-center text-lg-right justify-content-end bg-secondary ">
		<p class="mb-0 register-link ">
             <a href="{{ route('register') }}" class="mr-4 text-light"></a>
             <a href="{{ route('login') }}" class="mr-3 text-light"></a>
        </p>
	</div>
    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">
            <div class="col-3 ">
            <div class="container-fluid" style="margin-top: -9%; margin-left: -50%">
               <a href="{{ route('register') }}" class="mr-4 text-light">s'inscrire</a>
               <a href="{{ route('login') }}" class="mr-3 text-light">se connecter</a>
            </div>
              <div class="site-logo">
                <a href="{{ route('accueil')}}"><em> Salon de Beauté </em></a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class=" site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                <li ><a href="{{ route('accueil')}}" class="nav-link">Accueil</a></li>
                <li><a href="{{ route('service')}}" class="nav-link">Services</a></li>
                <li><a href="{{ route('barber')}}" class="nav-link">Realisation</a></li>
                <li><a href="{{ route('about')}}" class="nav-link">A-propos</a></li>
                <li><a href="{{ route('blog')}}" class="nav-link">Galery</a></li>
                <li><a href="{{ route('contact', ['#mail'])}}" class="nav-link">Contact</a></li>
                <li><a href="{{ route('rdv')}}" class="nav-link">Prendre-RDV</a></li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>

      @yield('content')
   

    <footer class="site-footer">
      <div class="container" >
        <div class="row">
          <div class="col-lg-3">
            <img src="images/img_1.jpg" alt="Image" class="img-fluid mb-5">
            <h2 class="footer-heading mb-3"><Qui-somme-nous>Qui-somme-nous</Qui-somme-nous></h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
          </div>
          <div class="col-lg-8 ml-auto">
            <div class="row">
              <div class="col-lg-6  ml-auto">
                <h2 class="footer-heading mb-4">Lien Rapide</h2>
                <ul class="list-unstyled">
                  <li><a href="{{ route('about')}}">A-propos-de-nous</a></li>
                  <li><a href="{{ route('accueil' , ['#temoignage'] )}}">Temoignages</a></li>
                  <li><a href="{{ route('accueil' , ['#service'] )}}"> Service</a></li>
                  <li><a href="{{ route('contact')}}">Contact-nous</a></li>
                </ul>
              </div>
            <div class="col-lg-6">
                <h2 class="footer-heading mb-4">Journal</h2>
                <form action="#" class="d-flex" class="subscribe">
                  <input type="text" class="form-control mr-3" placeholder="Email">
                  <input type="submit" value="Send" class="btn btn-primary">
                </form>
              </div>
              
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous Droits Réservés| Salon de Beauté <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/yBox.min.js"></script>
    <script src="js/yBox.js"></script>
    <script src="js/directive.min.js"></script>
    <script src="path/to/lightbox.js"></script>
    <script type="text/javascript">     
    
   
 function ShowHide(elm){
   var element = document.getElementById(elm);
   if( element.style.display == 'none'){
     element.style.display = 'block';
   }else{
     element.style.display = 'none';
   }
 }
</script>
<script src="js/aos.js"></script>
   <script src="js/main.js"></script>
    
  </body>

</html>

