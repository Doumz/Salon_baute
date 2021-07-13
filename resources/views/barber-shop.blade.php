@extends('layouts.importLayout')

@section('content')

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mb-3">Salon de Beauté</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta veritatis in tenetur doloremque, maiores doloribus officia iste. Dolores.</p>
              <p><a class="btn btn-primary text-light" onclick="ShowHide('zoneAafficher2')">Lire la suite</a></p>
              <p id='zoneAafficher2' style="text-align: justify; margin-left: 40px;display:none">
                 <span style="color:#666666;">
                    <span class="" style="font-size:16px;">
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

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h3 class="scissors text-center">Coiffure en vedette</h3>
            <p class="mb-5 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure nesciunt nemo vel earum maxime neque!</p>
          </div>
        </div>
        <div class="row hair-style">
          <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <a href="#" class="place">
              <img src="images/img_1.jpg" alt="Image placeholder">
              <h2>Beard Shaving</h2>
              <p><a href="#" class=" btn btn-primary"> commentez</a>
              <a href="#" class="btn btn-primary float-right">Prendre-RDV</a></p>
            </a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <a href="#" class="place">
              <img src="images/img_2.jpg" alt="Image placeholder">
              <h2>Crew Cut</h2>
              <p><a href="#" class=" btn btn-primary"> commentez</a>
              <a href="#" class="btn btn-primary float-right">Prendre-RDV</a></p>
            </a>
            </a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-12">
            <a href="#" class="place">
              <img src="images/img_3.jpg" alt="Image placeholder">
              <h2>Beard Trim</h2>
              <p><a href="#" class=" btn btn-primary"> commentez</a>
              <a href="#" class="btn btn-primary float-right">Prendre-RDV</a></p>
            </a>
            </a>
          </div>
          
        </div>
      </div>
    </div>
    <!-- END section -->

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center  mb-5">
          <div class="col-md-7 text-center">
            <h3 class="scissors text-center">Prestagtions</h3>
            <p class="mb-5 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure nesciunt nemo vel earum maxime neque!</p>

            <p class="text-center">
              <a href="#" class="btn btn-primary custom-prev">Prev</a>
              <a href="#" class="btn btn-primary custom-next">Next</a>
            </p>
          </div>

        </div>
        <div class="row">
          <div class="col-12">

            <div class="nonloop-block-13 owl-carousel d-flex">
              
              <div class="item-1 h">
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                <div class="item-1-contents">
                  <h3>Haircut</h3>
                  <ul>
                    <li class="d-flex"><span>Men's Cut</span> <span class="price ml-auto">$29.00</span></li>
                    <li class="d-flex"><span>Men's Cut with Shampoo and Blow Dry</span><span class="price ml-auto">$10.00</span></li>
                    <li class="d-flex"><span>Ladie's Cut with Shampoo and Blow Dry</span><span class="price ml-auto">$32.00</span></li>
                    <li class="d-flex"><span>Head Shave</span><span class="price ml-auto">$23.00</span></li>
                    <li class="d-flex"><span>Hair Art</span><span class="price ml-auto">$54.00</span></li>
                  </ul>
                </div>
                
              </div>

              <div class="item-1 h">
                <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                <div class="item-1-contents">
                  <h3>Hair Styling</h3>
                  <ul>
                    <li class="d-flex"><span>Shampoo</span> <span class="price ml-auto">$29.00</span></li>
                    <li class="d-flex"><span>Blow Dry</span><span class="price ml-auto">$10.00</span></li>
                    <li class="d-flex"><span>Iron</span><span class="price ml-auto">$32.00</span></li>
                    <li class="d-flex"><span>Brazilian Blow Out</span><span class="price ml-auto">$23.00</span></li>
                    <li class="d-flex"><span>Hair Art</span><span class="price ml-auto">$54.00</span></li>
                  </ul>
                </div>
                
              </div>

              <div class="item-1 h">
                <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                <div class="item-1-contents">
                  <h3>Hair Scalp Care</h3>
                  <ul>
                    <li class="d-flex"><span>Shampoo</span> <span class="price ml-auto">$29.00</span></li>
                    <li class="d-flex"><span>Blow Dry</span><span class="price ml-auto">$10.00</span></li>
                    <li class="d-flex"><span>Iron</span><span class="price ml-auto">$32.00</span></li>
                    <li class="d-flex"><span>Brazilian Blow Out</span><span class="price ml-auto">$23.00</span></li>
                    <li class="d-flex"><span>Hair Art</span><span class="price ml-auto">$54.00</span></li>
                  </ul>
                </div>
                
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
            <h2 class="text-white scissors primary-color-icon text-center">Coup de cheveux de  qualitée</h2>
            <p class="lead text-white mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam quo doloribus, suscipit libero, voluptate aliquam.</p>
            <p><a href="#" class="btn btn-primary">Prendre-RDV</a></p>
          </div>
        </div>
      </div>
    </div>

    
@endsection