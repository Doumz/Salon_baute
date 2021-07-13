@extends('layouts.importLayout')

@section('content')
    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mb-3"><qui-somme>Qui-somme-nous</qui-somme></h1>
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
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="img-years">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              <div class="year">
                <span>3 <span>anneés <br>d'excellent service</span></span>
              </div>
            </div>

          </div>
          <div class="col-lg-5 ml-auto pl-lg-5 text-center">
            <h3 class="scissors text-center">Coiffure de Haute Qualité</h3>
            <p class="mb-5 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure nesciunt nemo vel earum maxime neque!</p>
            <p><a href="#" class="btn btn-primary">Lire la suite</a></p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5 section-2-title">
          <div class="col-md-6">
            <h3 class="scissors text-center">Rencontrez notre ééquipe</h3>
            <p class="mb-5 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure nesciunt nemo vel earum maxime neque!</p>
          </div>
        </div>
        <div class="row align-items-stretch">

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1">
              
                <img src="images/person_1.jpg" alt="Image"
                 class="img-fluid">
            
              <div class="post-entry-1-contents">
                <span class="meta">Fondatrice</span>
                <h2>Anne Désiré</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1">
              
                <img src="images/person_2.jpg" alt="Image"
                 class="img-fluid">
            
              <div class="post-entry-1-contents">
                <span class="meta">Fondatrice</span>
                <h2>Anne Désiré</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1">
              
                <img src="images/person_3.jpg" alt="Image"
                 class="img-fluid">
            
              <div class="post-entry-1-contents">
                <span class="meta">Coiffeuse</span>
                <h2>James Doe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1">
              
                <img src="images/person_4.jpg" alt="Image"
                 class="img-fluid">
            
              <div class="post-entry-1-contents">
                <span class="meta">Coiffeur</span>
                <h2>James Sam</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1">
              
                <img src="images/person_5.jpg" alt="Image"
                 class="img-fluid">
            
              <div class="post-entry-1-contents">
                <span class="meta">Estheticienne</span>
                <h2>SAM</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1">
              
                <img src="images/person_1.jpg" alt="Image"
                 class="img-fluid">
            
              <div class="post-entry-1-contents">
                <span class="meta">Estheticienne</span>
                <h2>James Doe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
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
            <h2 class="text-white scissors primary-color-icon text-center">Coiffeuse de qualitée</h2>
            <p class="lead text-white mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam quo doloribus, suscipit libero, voluptate aliquam.</p>
            <p><a href="#" class="btn btn-primary">Prendre-RDV</a></p>
          </div>
        </div>
      </div>
    </div>

    
@endsection 