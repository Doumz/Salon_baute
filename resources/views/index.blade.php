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

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mb-3">Plus Qu'un Salon de Beauté</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta veritatis in tenetur doloremque, maiores doloribus officia iste. Dolores.</p>
              <p><a class="btn btn-primary text-light" onclick="ShowHide('zoneAafficher2')">Lire la suite</a></p>
            
              <p id='zoneAafficher2' style="text-align: justify; margin-left: 40px;display:none">
                 <span style="color:#666666;">
                    <span class="" style="font-size:16px; margin-left:0%">
                      Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.<br>
                      Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla<br>
                      ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. 
                     Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, 
                     sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles <br>
                    Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
                  </span>
                </span>
              </p>
           </div>
          </div>
        </div>
      </div>
    </div>

    <div id="carouselExampleIndicators" class="carousel col-md-7 mt-7 slide d-inline" data-ride="carousel">
          <div class="carousel-inner" style="margin-top: -53%">
           <div class="carousel-item  active">
           <div class="container-fluid" style="height: 100%"><img src="images/img_1.jpg" alt="Image" class=" boxImg"></div>
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="text-info">Third slide label...</h5>
                   <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur...</p>
                </div>
                </div>
                <div class="carousel-item">
                <div class="container-fluid" style="height: 100%"><img src="images/img_1.jpg" alt="Image" class=" boxImg"></div>
                   <div class="carousel-caption d-none d-md-block ">
                   <h5 class="text-info">Third slide label...</h5>
                       <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur...</p>
                     </div>
                  </div>
                 <div class="carousel-item">
                   <div class="container-fluid"><img src="images/img_1.jpg" alt="Image" class=" boxImg"></div>
                     <div class="carousel-caption d-none d-md-block">
                       <h5 class="text-info">Third slide label...</h5>
                       <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur....</p>
                    </div>
            </div>
    
    <div class="site-section">
      <div class="container" style="margin-top: 50%">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="img-years">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              <div class="year">
                <span>3 <span>années <br>d'excellent service</span></span>
              </div>
            </div>

          </div>
          <div class="col-lg-5 ml-auto pl-lg-5 text-center">
            <h3 class="scissors text-center">Bienvenue dans Salon de beauté!</h3>
            <p class="mb-5 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure nesciunt nemo vel earum maxime neque!</p>
            <p><a class="btn btn-primary text-light" onclick="ShowHide('zoneAafficher3')">Lire la suite</a></p>
          </div>
         
         <div class="row col-12">
            <p id='zoneAafficher3' style="text-align: justify; margin-left: 40px;display:none">
              <span style="color:#666666;">
                <span class="float-right" style="font-size:14px; margin-left:60%">
                  Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.<br>
                  Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla<br>
                  ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. 
                  Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, 
                 sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles <br>
                 Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
                </span>
              </span>
           </p>
         </div>
        </div>
      </div>
    </div>

    

    <!-- END section -->

    <div id="servive" class="site-section section-3" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_2.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-7 text-center mb-5">
            <h2 class="text-white scissors primary-color-icon text-center">Nos Services</h2>
            <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam quo doloribus, suscipit libero, voluptate aliquam.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
              <a href="{{ route('accueil', ['#coiffure']) }}">
              <span class="service-1-icon">
                <span class="flaticon-bald"></span>
              </span>
              </a>
              <div class="service-1-contents">
                <h3>Coiffures</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
            <a href="{{ route('accueil', ['#prestation']) }}">
              <span class="service-1-icon">
                <span class="flaticon-beard"></span>
              </span>
            </a>
              <div class="service-1-contents">
                <h3>Make-up &amp; Soin de corqs</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
            <a href="{{ route('accueil', ['#prestation']) }}">
              <span class="service-1-icon">
                <span class="flaticon-scissors"></span>
              </span>
            </a>
              <div class="service-1-contents">
                <h3>Massages</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
              <a href="{{ route('detail', ['#creation']) }}">
                  <span class="service-1-icon">
                    <span class="flaticon-hair-spray"></span>
                  </span>
                  <div class="service-1-contents">
                    <h3>Nos Tarifs Coiffures</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
              <a href="{{ route('detail', ['#soins']) }}">
                  <span class="service-1-icon">
                    <span class="flaticon-hair"></span>
                  </span>
                  <div class="service-1-contents">
                    <h3>Nos Tarifs Soins</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
              <a href="{{ route('detail', ['#conseil']) }}">
                  <span class="service-1-icon">
                    <span class="flaticon-barber-shop"></span>
                  </span>
                  <div class="service-1-contents">
                    <h3>Conseil</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
             </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


    
    
    <div class="site-section bg-light" id="temoignage">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-7 text-center mb-5">
            <h2 class="scissors text-center">Temoignages</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <div class="d-flex v-card align-items-center mb-4">
                <img src="images/person_1.jpg" alt="Image" class="img-fluid mr-3">
                <span>Mike Fisher</span>
              </div>
              <blockquote>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <div class="d-flex v-card align-items-center mb-4">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-3">
                <span>Jean Stanley</span>
              </div>
              <blockquote>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <div class="d-flex v-card align-items-center mb-4">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid mr-3">
                <span>Katie Rose</span>
              </div>
              <blockquote>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-white">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-7 text-center mb-5">
            <h2 class="scissors text-center">Galery</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="images/img_1.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">Lorem ipsum dolor sit amet</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="images/img_2.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">Lorem ipsum dolor sit amet</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="images/img_3.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">Lorem ipsum dolor sit amet</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section section-3" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-7 text-center mb-5">
            <h2 class="text-white scissors primary-color-icon text-center">Coup de cheveux de qualitée</h2>
            <p class="lead text-white mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam quo doloribus, suscipit libero, voluptate aliquam.</p>
            <p><a href="{{ route('rdv')}}" class="btn btn-primary">Prendre-RDV</a></p>
          </div>
        </div>
      </div>
    </div>

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

