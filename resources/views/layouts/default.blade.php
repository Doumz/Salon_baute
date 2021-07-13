<!DOCTYPE html>
<html lang="en">
  <head>
            <title>{{ env('APP_NAME')}}</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
            <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

            <link rel="stylesheet" href="<?php echo url('/'); ?>/css/open-iconic-bootstrap.min.css">
            <link rel="stylesheet" href="<?php echo url('/'); ?>/css/animate.css">
            
            <link rel="stylesheet" href="<?php echo url('/'); ?>/css/owl.carousel.min.css">
            <link rel="stylesheet" href="<?php echo url('/'); ?>/css/owl.theme.default.min.css">
            <link rel="stylesheet" href="<?php echo url('/'); ?>/css/magnific-popup.css">

            <link rel="stylesheet" href="<?php echo url('/'); ?>/css/aos.css">

            <link rel="stylesheet" href="<?php echo url('/'); ?>/css/ionicons.min.css">
            
            <link rel="stylesheet" href="<?php echo url('/'); ?>/css/flaticon.css">
            <link rel="stylesheet" href="<?php echo url('/'); ?>/css/icomoon.css">
            <link rel="stylesheet" href="<?php echo url('/'); ?>/css/style.css">
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/disein.css">
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            <link href="{{ asset('css/util.css') }}" rel="stylesheet">
            <link href="{{ asset('css/main.css') }}" rel="stylesheet"> 
            <link rel="stylesheet" href="{{ asset('css/disein.css') }}"> 
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <a href="{{route('accueil')}}" class="btn btn-outline-primary"><em>{{ env('APP_NAME')}}</em></a>
                    @guest 
                        <div class="form-inline cash-nav fo my-2 my-lg-0" style="margin-left:70%">
                        <a href="{{route('register')}}" class="btn btn-primary">Inscription</a>
                        <a href="{{route('login')}}" class="btn btn-outline-primary">Connection</a>
                        </div>
                    @endguest
                  @auth
                        <div class="nav-item dropdown" style="margin-left:85%">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ ('se déconnecter') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>

                     @endauth
                        </div>
                    </nav>
            <div class="pt-4 mt-4">
            @yield('content')
            </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->

    <script src="<?php echo url('/'); ?>/js/jquery.min.js"></script>
<script src="<?php echo url('/'); ?>/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?php echo url('/'); ?>/js/popper.min.js"></script>
<script src="<?php echo url('/'); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo url('/'); ?>/js/jquery.easing.1.3.js"></script>
<script src="<?php echo url('/'); ?>/js/jquery.waypoints.min.js"></script>
<script src="<?php echo url('/'); ?>/js/jquery.stellar.min.js"></script>
<script src="<?php echo url('/'); ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo url('/'); ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo url('/'); ?>/js/aos.js"></script>
<script src="<?php echo url('/'); ?>/js/jquery.animateNumber.min.js"></script>
<script src="<?php echo url('/'); ?>/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="<?php echo url('/'); ?>/js/google-map.js"></script>

<script src="<?php echo url('/'); ?>/js/main.js"></script>
  </body>
</html>
