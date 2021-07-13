@extends('layouts.importLayout')

@section('content')

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7 mt-3">
              <h1 class="mb-1">Nos Services</h1>
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
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1 dark">
              <span class="service-1-icon">
                <span class="flaticon-bald"></span>
              </span>
              <div class="service-1-contents">
                <h3>Coiffure</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1 dark">
             <a href="{{ route('accueil', ['#prestation']) }}">
                  <span class="service-1-icon">
                    <span class="flaticon-beard"></span>
                  </span>
                  <div class="service-1-contents">
                    <h3>Make-up &amp; Soin du Corps</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                  </div>
             </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1 dark">
             <a href="{{ route('accueil', ['#prestation']) }}">
                  <span class="service-1-icon">
                    <span class="flaticon-scissors"></span>
                  </span>
                  <div class="service-1-contents">
                    <h3>Massages</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                  </div>
             </a>  
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1 dark">
              <a href="{{ route('detail', ['#creation']) }}">
                  <span class="service-1-icon">
                    <span class="flaticon-hair-spray"></span>
                  </span>
                  <div class="service-1-contents">
                    <h3>Nos Tarifs Coiffures</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                  </div>
             </a>  
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1 dark">
              <a href="{{ route('detail', ['#conseil']) }}">
                  <span class="service-1-icon">
                    <span class="flaticon-hair"></span>
                  </span>
                  <div class="service-1-contents">
                    <h3>Nos Tarifs Soins</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                  </div>
             </a>   
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1 dark">
              <a href="{{ route('detail', ['#conseil']) }}">
                  <span class="service-1-icon">
                    <span class="flaticon-barber-shop"></span>
                  </span>
                  <div class="service-1-contents">
                    <h3>Conseil</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                  </div>
              </a>   
            </div>
          </div>

        </div>
      </div>
    </div>
    
    
    

    
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-7 text-center mb-5">
            <h2 class="scissors text-center">Les Temoignages</h2>
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


    

    <div class="site-section section-3" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-7 text-center mb-5">
            <h2 class="text-white scissors primary-color-icon text-center">Coup de cheveux de qualitée</h2>
            <p class="lead text-white mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam quo doloribus, suscipit libero, voluptate aliquam.</p>
            <p><a href="#" class="btn btn-primary">Prendre-RDV</a></p>
          </div>
        </div>
      </div>
    </div>

@endsection