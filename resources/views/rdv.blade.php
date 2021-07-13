<!doctype html>
<html lang="en">

  <head>
    <title>{{ env('APP_NAME')}} &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:100,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="100">
   <div class=" align-items-center text-lg-right justify-content-end bg-secondary ">
		<p class="mb-0 register-link ">
             <a href="{{ route('register') }}" class="mr-4 text-light">s'inscrire</a>
             <a href="{{ route('login') }}" class="mr-3 text-light">se connecter</a>
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
              <div class="site-logo">
                <a href="{{ route('accueil')}}"><em> Salon de Beauté </em></a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class=" site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                <li class="active"><a href="{{ route('accueil')}}" class="nav-link">Accueil</a></li>
                <li><a href="{{ route('service')}}" class="nav-link">Services</a></li>
                <li><a href="{{ route('barber')}}" class="nav-link">Realisation</a></li>
                <li><a href="{{ route('about')}}" class="nav-link">A-propos</a></li>
                <li><a href="{{ route('blog')}}" class="nav-link">Galery</a></li>
                <li><a href="{{ route('contact')}}" class="nav-link">Contact</a></li>
                <li><a href="{{ route('rdv')}}" class="nav-link">Prendre-RDV</a></li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header> 
    <div class="ftco-blocks-cover-1">
      <div class="hero-wrap overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mt-">PRENDRE UN RDV</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
        <h2 class="mt-">PRENDRE UN RDV</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
        </div>
      </div>
      <div class="container-fluid text-center margin-tb">
         <div class="pul-left">
            @if(Session::has('message'))
              <div class="alert  alert-success">
                   <p>{{Session::get('message')}}</p>
               </div>
                  @endif
           </div>
       </div>
      <div class="hero-wrap  overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/bg_2.jpg'); width:150% ; margin-left: -13%">
      <div id="rdv" class="section">
      <div class="section-center">
        <div class="container container-fluid">
          <div class="row">
            <div class="booking-form" style="margin-left: -20%">
              <form action="{{route('add.add_reservation')}}" method="POST" enctype="multipart/form-data">
                 @csrf
                <div class="form-group">
                 <!-- <div class="form-checkbox">
                    <label for="roundtrip">
                      <input type="radio" id="roundtrip" name="flight-type">
                      <span></span>Roundtrip
                    </label>
                    <label for="one-way">
                      <input type="radio" id="one-way" name="flight-type">
                      <span></span>One way
                    </label>
                    <label for="multi-city">
                      <input type="radio" id="multi-city" name="flight-type">
                      <span></span>Multi-City
                    </label>
                  </div>-->
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <span class="form-label">Nom Client</span>
                      <input class="form-control @error('nom_client') is-invalid @enderror" name="nom_client" type="text" placeholder="Entrez votre nom" required value="{{old('nom_client')}}">
                    </div>
                       @error('nom_client')
                        <div class="invalid-feedback">
                           {{$errors->first('nom_client')}}
                        </div>
                      @enderror
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <span class="form-label">Prenoms Clients</span>
                      <input class="form-control  @error('prenom_client') is-invalid @enderror" name="prenom_client" type="text" placeholder="Entrez votre Prenom" required value="{{old('prenom_client')}}">
                    </div>
                    @error('prenom_client')
                        <div class="invalid-feedback">
                           {{$errors->first('prenom_client')}}
                        </div>
                      @enderror
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <span class="form-label">Adresse mail</span>
                      <input class="form-control @error('mail_client') is-invalid @enderror" name="mail_client" type="email" placeholder="Entrez votre email" required value="{{old('mail_client')}}">
                    </div>
                    @error('mail_client')
                        <div class="invalid-feedback">
                           {{$errors->first('mail_client')}}
                        </div>
                      @enderror
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <span class="form-label">Contact Client</span>
                      <input class="form-control @error('contact_client') is-invalid @enderror" name="contact_client" type="text" placeholder="Entrez votre Contact" required value="{{old('contact_client')}}">
                    </div>
                    @error('contact_client')
                        <div class="invalid-feedback">
                           {{$errors->first('contact_client')}}
                        </div>
                      @enderror
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <span class="form-label">Date</span>
                      <input class="form-control @error('date_reservation') is-invalid @enderror" name="date_reservation" type="date" required value="{{old('date_reservation')}}">
                    </div>
                    @error('date_reservation')
                        <div class="invalid-feedback">
                           {{$errors->first('date_reservation')}}
                        </div>
                      @enderror
                  </div>
                  
                  <div class="col-md-2">
                    <div class="form-group">
                      <span class="form-label">Pestation</span>
                      <select name="motif" class="form-control">
                        <option value="Coiffure">Coiffure</option>
                        <option value="Massage">Massage</option>
                        <option value="Make_up">Make_up</option>
                      </select>
                      <span class="select-arrow"></span>
                      @error('motif')
                        <div class="invalid-feedback">
                          {{$errors->first('motif')}}
                        </div>
                     @enderror
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group ml-5 mt-2">
                    <span class="form-label">Message</span>
                      <input type="textarea" class="form-control " name="message" rows="10" cols="20"  placeholder="Votre Message ..."> 
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <span class="form-label">Selectionner une image</span>
                      <input class="form-control-file" name="img" type="file">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <span class="form-label">Selectionner une photo</span>
                      <input class="form-control-file" name="photo[]" multiple="" type="file">
                    </div>
                  </div>
                  <div class="col-md-3">
									<div class="form-btn">
										<button class="submit-btn">Envoyer</button>
									</div>
								</div>
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>





  
    <footer class="site-footer">
      <div class="container">
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