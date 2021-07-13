@extends('layouts.importLayout')


@section('content')

    <div class="ftco-flexs-cover-1">
      <div class="hero-wrap overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')">
        <div class="">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7 mt-5 text-light">
              <h1 class="">DETAIL</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta veritatis in tenetur doloremque, maiores doloribus officia iste. Dolores.</p>
              <p><a class="btn btn-primary text-light" onclick="ShowHide('zoneAafficher2')">Lire la suite</a></p>
              <p id='zoneAafficher2'  style="text-align: justify; margin-left: 40px;display:none">
                 <span class="text-light cash-content" style="color:#666666;">
                    <span class="" style="font-size:16px;">
                      Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.<br>
                      Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 150, quand un peintre anonyme assembla<br>
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

    <div class="site-section bg-light" id="contact-section">
      <div id="conseil" class="" >
        <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <h2>Conseil</h2>
          <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
        </div>
      </div>
              <p style="margin-top: -5%; margin-left: 15%;">
                 <span style="color:#666666;  ">
                    <span class="" style="font-size:16px;">
                      Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.<br>
                      Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 150, quand un peintre anonyme assembla<br>
                      ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. 
                     Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, 
                     sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles <br>
                    Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
                  </span>
                </span>
              </p>
              <p><a class="btn btn-primary text-light" style="margin-left: 35%;" onclick="ShowHide('booking')">Liassez votre préocupation</a></p>
              
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
    <div id='booking'   style="background-image: url('images/bg_2.jpg'); text-align: justify; margin-left: 40px;display:none" class="section">
		<div class="section-center">
			<div class="container container-fluid" >
				<div class="row cash-proecupation">
					<div class="booking-form" style="margin-left: 20%;" >
						<form action="{{route('add.add_procupation')}}" method="POST">
              @csrf
							<div class="form-group">
								<input class="form-control" type="text" name="nom_client" placeholder="Entrez votre Nom...">
								<span class="form-label">Votre Nom</span>
              </div>
              <div class="form-group">
								<input class="form-control" type="text" name="prenom" placeholder="Entrez votre Prenom...">
								<span class="form-label">Votre Prenom</span>
              </div>
              
              <div class="form-group">
								<input class="form-control" type="textarea" name="preocupation" placeholder="Quel est votre preocupation...">
								<span class="form-label">Message</span>
							</div>
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="email" name="mail_client" placeholder="Enter your Email">
										<span class="form-label">Email</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="tel" name="contact_client" placeholder="Enter you Phone">
										<span class="form-label">Contact</span>
									</div>
								</div>
							</div>
							<div class="form-btn">
								<button class="submit-btn">Envoyer</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
  </div>

  <main>
  <section>
  <div id="prestation" class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center  mb-5">
          <div class="col-md-7 text-center">
            <h3 class="scissors text-center">Prestations</h3>
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
                <a href="images/img_1.jpg" data-lightbox="img_1" > <img src="images/img_1.jpg"  alt="Image" class="cash-img img-fluid"></a>
                <div class="item-1-contents">
                  <h3>Haircut</h3>
                  <a href="{{ route('rdv', ['#rdv']) }}" class="btn btn-primary btn-sm ">Prendre-RDV</a>
                </div>
                
              </div>

              <div class="item-1 h">
              <a href="images/img_2.jpg"> <img src="images/img_2.jpg" alt="Image" class="cash-img img-fluid"></a>
                <div class="item-1-contents">
                  <h3>Hair Styling</h3>
                  <a href="{{ route('rdv', ['#rdv']) }}" class="btn btn-primary btn-sm ">Prendre-RDV</a>
                </div>
                
              </div>

              <div class="item-1 h">
              <a href="images/img_3.jpg"> <img src="images/img_3.jpg" alt="Image" class="cash-img img-fluid"></a>
                <div class="item-1-contents">
                  <h3>Hair Scalp Care</h3>
                  <a href="{{ route('rdv', ['#rdv']) }}" class="btn btn-primary btn-sm ">Prendre-RDV</a>
                </div>
                
              </div>

            </div>
            
          </div>
        </div>
      </div>
    </div>

  </section>
</main>
  <section class="cash-section">
     <div id="soins" class="col-md-7 text-center text-title">
        <h3 class="scissors text-center">SALON DE BEAUTÉ</h3>
        <p class="mb-5 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure nesciunt nemo vel earum maxime neque!</p>
     </div>
     <h3 class=" text-center cash-h3">NOS TARIFS BEAUTÉ SOINS</h3>
        <div class="cash-text wp-flex-kadence-accordion alignnone" >
        <div class="">
           <img src="images/work-3.jpg" alt="Image" class="cash-img  imgBox d-block">
        </div>
        <div id="soins" class=" textBox d-block kt-accordion-wrap kt-accordion-wrap kt-accordion-id_22caee-fd kt-accordion-has-3-panes kt-active-pane-0 kt-accordion-flex kt-pane-header-alignment-left kt-accodion-icon-style-basic kt-accodion-icon-side-right" style="max-width:none">
            <div class="kt-accordion-inner-wrap" data-allow-multiple-open="false" data-start-open="0">
              <div class="wp-flex-kadence-pane kt-accordion-pane kt-accordion-pane-1 kt-pane_2771d2-a0">
                <div class="kt-accordion-header-wrap">
                <button class="kt-flexs-accordion-header kt-acccordion-button-label-show bg-warning col-6 btn-lg"  onclick="ShowHide('afficheY')">
                       <div class="kt-flexs-accordion-title-wrap">
                         <span class="kt-flexs-accordion-title">  SOINS DU VISAGE  </span>
                      </div>
                      <div class="kt-flexs-accordion-icon-trigger">
                       </div>
                  </button>
                 </div>
                 <div id='afficheY'  style="text-align: justify; margin-left: 40px;display:none">
              <div class="kt-accordion-panel">
                  <div class="kt-accordion-panel-inner">
                   <h3 class="has-very-dark-gray-color has-text-color">SOIN COUP D’ECLAT</h3>
                    <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
                      <tbody>
                       <tr class="cash-tr">
                          <td> Gommage doux et masque adparté au type de peau. Lui redonne fraîcheur et bien-être </td>
                          <td> 0h45<br>49 € </td>
                        </tr>
                      </tbody>
                    </table> 
                   <h3 class="has-very-dark-gray-color has-text-color">SOIN BEAUTÉ COMPLET </h3>
                     <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
                       <tbody>
                        <tr class="cash-tr">
                           <td>Soin du visage complet pour une peau nette et détendue, adapté à ses besoins spécifiques</td>
                           <td> 1h30<br>75€ </td>
                          </tr>
                        </tbody>
                      </table>

                   <h3 class="has-very-dark-gray-color has-text-color">SOIN THALASSO JEUNESSE </h3>
                      <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
                        <tbody>
                        <tr class="cash-tr">
                          <td>Soin riche en minéraux issus de l’algue rouge qui apporte un effet visible raffermissant et lissant</td>
                            <td> 1h30<br>90 € </td>
                          </tr>
                        </tbody>
                      </table>
                   <h3 class="has-very-dark-gray-color has-text-color">SOIN DERMOSTHÉTIQUE LIFTANT </h3>
                      <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
                        <tbody>
                        <tr class="cash-tr">
                          <td>Soin qui régénère et booste le collagène et l’élastine de la peau, avec l’acide hyaluronique qui <br>offre un effet tenseur et hydratant </td>
                            <td> 2h00<br>120€ </td>
                          </tr>
                        </tbody>
                      </table>
                    <h3 class="has-very-dark-gray-color has-text-color">SOIN CONTOUR DES YEUX </h3>
                      <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
                        <tbody>
                      <tr class="cash-tr">
                        <td class="col-12"> Soin apaisant, lissant et raffermissant pour le contour des yeux Forfait 3 soins </td>
                            <td class="col-1 cash-td"> 0h45<br>10€ </td>
                          </tr>
                      <tr class="cash-tr">
                        </tbody>
                      </table>
                    <h3 class="has-very-dark-gray-color has-text-color">SOIN VISAGE HOMME </h3>
                       <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
                         <tbody>
                       <tr class="cash-tr">
                         <td class="col-12">Soin du visage complet dédié aux besoins spécifique des hommes. La peau devient claire et douce</td>
                             <td class="col-1"> 1h30<br>75 € </td>
                            </tr>
                          </tbody>
                        </table>
                     </div>
              </div>
            </div>
          </div>

          <div class="wp-flex-kadence-pane kt-accordion-pane kt-accordion-pane-3 kt-pane_2c641f-ce">
            <div class="kt-accordion-header-wrap">
              <button class="kt-flexs-accordion-header kt-acccordion-button-label-show bg-warning col-6 btn-lg"  onclick="ShowHide('affiche9')">
                <div class="kt-flexs-accordion-title-wrap">
                  <span class="kt-flexs-accordion-title">SOINS DU CORPS </span>
                </div>
                <div class="kt-flexs-accordion-icon-trigger"></div>
              </button>
              </div>
              <div id='affiche9'  style="text-align: justify; margin-left: 40px;display:none">
              <div class="kt-accordion-panel">
                <div class="kt-accordion-panel-inner">
                  <h3 class="has-very-dark-gray-color has-text-color">GOMMAGE DU CORPS </h3>
                    <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
                      <tbody>
                    <tr class="cash-tr">
                      <td class="col-12">Gommage aux sels et à l’eau de mer pour une peau douce, soyeuse et lumineuse </td>
                        <td class="col-1"> 0h45<br>45 € </td>
                      </tr>
                    </tbody>
                     </table>
                 <h3 class="has-very-dark-gray-color has-text-color">MODELAGE DU DOS </h3>
                  <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
                    <tbody>
                  <tr class="cash-tr">
                    <td class="col-12">Modelage pour relâcher vos tensions et décontracter vos muscles</td>
                        <td class="col-1"> 0h30<br>35 € </td>
                      </tr>
                    </tbody>
                  </table>
                <h3 class="has-very-dark-gray-color has-text-color">SOIN DU DOS </h3>
                  <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
                    <tbody>
                  <tr class="cash-tr">
                    <td>Nettoyage en profondeur du dos avec gommage, modelage détente et masque clarifiant</td>
                        <td> 1h00<br>70 € </td>
                      </tr>
                    </tbody>
                  </table>
                <h3 class="has-very-dark-gray-color has-text-color">MODELAGE CALIFORNIEN* </h3>
                  <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
                    <tbody>
                  <tr class="cash-tr">
                    <td class="col-12">Modelage aux movement lents et profonds pour un lâcher prise total </td>
                        <td class="col-1"> 1h30<br>90€ </td>
                      </tr>
                    </tbody>
                  </table>
                <h3 class="has-very-dark-gray-color has-text-color">MODELAGE BALINAIS* </h3>
                  <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
                    <tbody>
                  <tr class="cash-tr">
                    <td>Modelage rythmé par des lissage rapides puis lents et des étirements, apporte détente musculaire,<br> booste et revitalise le corps </td>
                        <td> 1h30<br>90€ </td>
                      </tr>
                    </tbody>
                  </table>
                <h3 class="has-very-dark-gray-color has-text-color">MODELAGE SHIATSU*</h3>
                  <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
                    <tbody>
                  <tr class="cash-tr">
                    <td>Soin du visage complet dédié aux besoins spécifique des hommes. La peau devient claire et douce</td>
                        <td> 1h30<br>90€ </td>
                      </tr>
                    </tbody>
                  </table>
                <h3 class="has-very-dark-gray-color has-text-color">SOIN ROYAL SPA RELAXANT*</h3>
                  <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
                    <tbody>
                  <tr class="cash-tr">
                    <td>Soin complet qui stimule tous les sens et rééquilibre les énergies e nassociant un gommage aux sels marrins et un modelage relaxant</td>
                        <td> 1h45<br>105€ </td>
                      </tr>
                    </tbody>
                  </table>
                <h3 class="has-very-dark-gray-color has-text-color">SOIN BODY DETOX</h3>
                 <h4 class="has-cyan-bluish-gray-color has-text-color">SÉANCE D’ESSAI</h4>
                   <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
                     <tbody>
                   <tr class="cash-tr">
                     <td>Soin raffermissant qui permet d’éliminer les toxines grâce à un gommage, un modelage localisé anti-capitons et un enveloppement</td>
                         <td> 1h00<br>70€ </td>
                        </tr>
                    <tr class="cash-tr">
                      <td> Forfait de 6 séances (sur 2 mois) </td>
                          <td> 1h30<br>540€ </td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                 </div>
              </div>
            </div>
          </div>
         </div>
       </div> 
  </section>
  <section class="cash-section">
     <div id="creation" class="col-md-7 text-center text-title">
        <h3 class="scissors text-center">SALON DE BEAUTÉ</h3>
        <p class="mb-5 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure nesciunt nemo vel earum maxime neque!</p>
     </div>
     <h3 class=" text-center cash-h3">NOS TARIFS BEAUTÉ COIFFURE</h3>
        <div class="cash-text wp-flex-kadence-accordion alignnone" >
        <div class="">
           <img src="images/im.jpg" alt="Image" class="cash-img  imgBox d-block">
        </div>
        <div class=" textBox d-block kt-accordion-wrap kt-accordion-wrap kt-accordion-id_22caee-fd kt-accordion-has-3-panes kt-active-pane-0 kt-accordion-flex kt-pane-header-alignment-left kt-accodion-icon-style-basic kt-accodion-icon-side-right" style="max-width:none">
            <div class="kt-accordion-inner-wrap" data-allow-multiple-open="false" data-start-open="0">
              <div class="wp-flex-kadence-pane kt-accordion-pane kt-accordion-pane-1 kt-pane_2771d2-a0">          
                <div class="kt-accordion-panel">
                  <div class="kt-accordion-panel-inner"> 
                    <div class="kt-accordion-header-wrap">
                      <button class="kt-flexs-accordion-header kt-acccordion-button-label-show bg-warning col-6 btn-lg"  onclick="ShowHide('affiche1')">
                        <div class="kt-flexs-accordion-title-wrap ">
                          <span class="kt-flexs-accordion-title"> CREATION </span>
                       </div>
                    <div class="kt-flexs-accordion-icon-trigger"></div>
                    </button>
                 </div>   
                 <div id='affiche1'  style="text-align: justify; margin-left: 40px;display:none">             
                    <h4 class="has-cyan-bluish-gray-color has-text-color">CONSEIL PERSONNALISÉ – DIAGNOSTIC BEAUTÉ DU CUIR CHEVELU ET DES CHEVEUX – ARÔMA SERVICE – SHAMPOING SPÉCIFIQUE LA BIOSTHÉTIQUE – COUPE ET BRUSHING</h4>
                      <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
                        <tbody>
                          <tr class="cash-tr">
                            <td class="col-11"> Création Coiffage cheveux courts </td>
                            <td> 39€ </td>
                          </tr>
                          <tr>
                            <td> Création Coiffage cheveux mi-longs </td>
                            <td> 42€ </td>
                          </tr>
                          <tr class="cash-tr">                         
                          <td> Création Coiffage cheveux longs </td>
                          <td> 45€ </td>
                        </tr>
                      </tbody>
                    </table>
                  <h3 class="has-very-dark-gray-color has-text-color">CRÉATION COUPE &amp; BRUSHING  </h3>
                  <h4 class="has-cyan-bluish-gray-color has-text-color">CONSEIL PERSONNALISÉ – DIAGNOSTIC BEAUTÉ DU CUIR CHEVELU ET DES CHEVEUX – ARÔMA SERVICE – SHAMPOING SPÉCIFIQUE LA BIOSTHÉTIQUE – COUPE ET BRUSHING</h4>
                    <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
                      <tbody>
                        <tr class="cash-tr">
                          <td class="col-11">Création Coupe &amp; Brushing cheveux courts </td>
                          <td> 43€ </td>
                        </tr>
                        <tr>
                          <td>Création Coupe &amp; Brushing cheveux mi-longs </td>
                          <td> 47€ </td>
                        </tr>
                        <tr class="cash-tr" >
                          <td>Création Coupe &amp; Brushing cheveux longs </td>
                          <td> 51€ </td>
                        </tr>
                      </tbody>
                    </table>
                 <h3 class="has-very-dark-gray-color has-text-color">CRÉATION TRANSFORMATION &amp; BRUSHING  </h3>  
                    <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
                      <tbody>
                        <tr class="cash-tr">
                          <td class="col-10">Création Transformation &amp; Brushing cheveux courts </td>
                          <td class="col-1">47€ </td>
                        </tr>
                        <tr>
                          <td>Création Transformation &amp; Brushing cheveux mi-longs </td>
                          <td class="col-1">51€ </td>
                        </tr>
                        <tr class="cash-tr">
                          <td>Création Transformation &amp; Brushing cheveux longs </td>
                          <td class="col-1">55€ </td>
                        </tr>
                      </tbody>
                    </table>                
                  <h3 class="has-very-dark-gray-color has-text-color">CRÉATION BRUSHING  </h3>
                    <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
                      <tbody>
                        <tr class="cash-tr">
                          <td class="col-11">Création Brushing cheveux courts </td>
                          <td class="col-1">26€ </td>
                        </tr>
                        <tr>
                          <td>Création Brushing cheveux mi-longs </td>
                          <td class="col-1">31€ </td>
                        </tr>
                        <tr class="cash-tr">
                          <td> Création Brushing cheveux longs </td>
                          <td class="col-1"> 37€ </td>
                        </tr>
                      </tbody>
                    </table>
                 <h3 class="has-very-dark-gray-color has-text-color">CRÉATION COULEUR, COUPE &amp; BRUSHING  </h3> 
                    <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
                      <tbody>
                        <tr class="cash-tr">
                          <td>Création Couleur, Coupe &amp; Brushing cheveux courts</td>
                          <td>  76€ </td>
                        </tr>
                        <tr>
                          <td> Création Couleur, Coupe &amp; Brushing cheveux mi-longs </td>
                          <td>  30€ </td>
                        </tr>
                        <tr class="cash-tr">
                          <td> Création Couleur, Coupe &amp; Brushing cheveux longs </td
                          ><td> 83€ </td>
                        </tr>
                      </tbody>
                    </table>
                </div>  
              </div>
          </div>
      </div>
      <div class="wp-flex-kadence-pane kt-accordion-pane kt-accordion-pane-2 kt-pane_a6d544-e1">
        <div class="kt-accordion-header-wrap">
          <button class="kt-flexs-accordion-header kt-acccordion-button-label-show bg-warning btn-lg col-6" onclick="ShowHide('affiche2')">
          <div class="kt-flexs-accordion-title-wrap">
            <span class="kt-flexs-accordion-title"> COLORATION </span>
          </div>
          <div class="kt-flexs-accordion-icon-trigger"></div>
        </button>
      </div>
      <div id='affiche2'  style="text-align: justify; margin-left: 40px;display:none"> 
      <div class="kt-accordion-panel">
        <div class="kt-accordion-panel-inner">
          <h3 class="has-very-dark-gray-color has-text-color">COLORATION PERSONNALISÉE   </h3>
          <h4 class="has-cyan-bluish-gray-color has-text-color">CONSEIL PERSONNALISÉ DANS LE CHOIX DES NUANCES – SOIN PRÉPARATEUR COLOR BARRIER – COLORATION TINT &amp; TONE ADVANCED – SOIN DE FINITION</h4>
            <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
              <tbody>
                <tr class="cash-tr">
                  <td class="col-10">Coloration ton sur ton </td>
                  <td class="col-1"> 34€<br> </td>
                </tr>
                <tr>
                  <td> Coloration racines </td>
                  <td class="col-1"> 34€ </td>
                </tr>
                <tr class="cash-tr">
                  <td> Dose supplémentaire (10 g) </td>
                  <td class="col-1"> 11€ </td>
                </tr>
                <tr>
                  <td><br> </td>
                  <td></td>
                </tr>
                <tr>
                  <td>Sublime longueurs cheveux courts </td>
                  <td class="col-1">16€ </td>
                </tr>
                <tr class="cash-tr">
                  <td>Sublime longueurs cheveux mi-longs </td>
                  <td class="col-1"> 21€ </td>
                </tr>
                <tr>
                  <td>Sublime longueurs cheveux longs </td>
                  <td class="col-1"> 26€<br> </td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                </tr>
                <tr class="cash-tr">
                  <td> Décoloration </td>
                  <td class="col-1"> 41€ </td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Bain de lumière </td>
                  <td class="col-1">16€</td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                </tr>
                <tr class="cash-tr">
                  <td>Balayage cheveux courts </td>
                  <td class="col-1">46€</td>
                </tr>
                <tr>
                  <td>Balayage cheveux mi-longs </td>
                  <td class="col-1">71€</td>
                </tr>
                <tr class="cash-tr">
                  <td>Balayage cheveux longs </td>
                  <td class="col-1">96€</td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                </tr>               
                <tr>
                  <td>Coup de soleil 2 en 1 cheveux courts </td>
                  <td class="col-1">  51€ </td>
                </tr>
                <tr class="cash-tr">
                  <td>Coup de soleil 2 en 1 mi-longs </td>
                  <td class="col-1">  56€ </td>
                </tr>
                <tr>
                  <td>Coup de soleil 2 en 1 cheveux longs</td>
                  <td class="col-1"> 61€ </td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                </tr>
                <tr class="cash-tr">
                  <td>Coup de soleil demi-tête cheveux courts</td>
                  <td class="col-1">18€</td>
                </tr>
                <tr>
                  <td>Coup de soleil demi-tête mi-longs</td>
                  <td class="col-1">24€</td>
                </tr>
                <tr class="cash-tr">
                  <td>Coup de soleil demi-tête cheveux longs</td>
                  <td class="col-1">30€</td>
                </tr>
              </tbody>
            </table>
            </div>
         </div>
       </div>
     </div>
    <div class="wp-flex-kadence-pane kt-accordion-pane kt-accordion-pane-3 kt-pane_2fe521-a5">
      <div class="kt-accordion-header-wrap d-grid gap-2"> 
        <button class="kt-flexs-accordion-header kt-acccordion-button-label-show bg-warning btn-lg col-6" onclick="ShowHide('affiche3')">
          <div class="kt-flexs-accordion-title-wrap">
            <span class="kt-flexs-accordion-title">FORME</span>
          </div>
          <div class="kt-flexs-accordion-icon-trigger"></div>
        </button> 
      </div>
      <div id='affiche3'  style="text-align: justify; margin-left: 40px;display:none"> 
      <div class="kt-accordion-panel">
        <div class="kt-accordion-panel-inner">
          <h3 class="has-very-dark-gray-color has-text-color">BOUCLES &amp; VOLUME </h3>
          <h4 class="has-cyan-bluish-gray-color has-text-color">CONSEIL PERSONNALISÉ – PROTECTION DES LONGUEURS – SOIN DURCISSEUR DE KÉRATINE</h4>
            <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
              <tbody>
                <tr class="cash-tr">
                  <td>Boucles &amp; Volume&nbsp; cheveux courts </td>
                  <td> 41€ </td>
                </tr>
                <tr>
                  <td>Boucles &amp; Volume  cheveux mi-longs </td>
                  <td> 51€ </td>
                </tr>
                <tr class="cash-tr">
                  <td>Boucles &amp; Volume  cheveux longs </td>
                  <td> 61€ </td>
                </tr>
              </tbody>
            </table>
          <h3 class="has-very-dark-gray-color has-text-color">DESSUS DE TÊTE </h3>
            <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
              <tbody>
              <tr class="cash-tr">
                <td class="col-9">Dessus de tête  </td>
                <td class="col-1"> 30€ </td>
              </tr>
             </tbody>
            </table>
          <h3 class="has-very-dark-gray-color has-text-color">SERVICE VOLUME   </h3>
          <h4 class="has-cyan-bluish-gray-color has-text-color">SHAMPOOING, FIXATEUR, MISE EN PLIS</h4>
          <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
            <tbody>
              <tr class="cash-tr">
                <td class="col-10">Service volume cheveux courts</td>
                <td class="col-1">27€ </td>
              </tr>
              <tr>
                <td>Service volume cheveux mi-longs </td>
                <td class="col-1">32€ </td>
              </tr>
              <tr class="cash-tr">
                <td>Service volume cheveux longs</td>
                <td class="col-1">38€ </td>
              </tr>
            </tbody>
          </table>
          </div>
       </div>
     </div>
   </div>
   <div class="wp-flex-kadence-pane kt-accordion-pane kt-accordion-pane-4 kt-pane_960fae-d2">
     <div class="kt-accordion-header-wrap">
       <button class="kt-flexs-accordion-header kt-acccordion-button-label-show bg-warning btn-lg col-6" onclick="ShowHide('affiche4')">
         <div class="kt-flexs-accordion-title-wrap">
           <span class="kt-flexs-accordion-title"> SOINS DES CHEVEUX </span>
          </div>
          <div class="kt-flexs-accordion-icon-trigger">
          </div>
        </button>
      </div>
      <div id='affiche4'  style="text-align: justify; margin-left: 40px;display:none"> 
      <div class="kt-accordion-panel">
        <div class="kt-accordion-panel-inner">
          <h3 class="has-very-dark-gray-color has-text-color">SOIN EXPRESS</h3>
          <h4 class="has-cyan-bluish-gray-color has-text-color">SOIN BRILLANCE RAPIDE QUI PROTÈGE LES CHEVEUX ENTRE DEUX SHAMPOOING</h4>
          <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
            <tbody>
              <tr class="cash-tr">
                <td class="col-11">Soin Express  </td>
                <td class="col-1"> 9€ </td>
              </tr>
            </tbody>
          </table>
          <h3 class="has-very-dark-gray-color has-text-color">SOIN INTENSE   </h3>
          <h4 class="has-cyan-bluish-gray-color has-text-color">SOIN SPÉCIFIQUE POUR UNE RÉGÉNÉRATION INTENSE DES CHEVEUX, POUR PLUS DE BRILLANCE, DE VOLUME ET DE SOUPLESSE</h4>
          <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
            <tbody>
              <tr class="cash-tr">
                <td class="col-11">Soin Intense  </td>
                <td class="col-1"> 17€ </td>
              </tr>
            </tbody>
          </table>
          </div>
       </div>
     </div>
   </div>
   <div class="wp-flex-kadence-pane kt-accordion-pane kt-accordion-pane-5 kt-pane_3d232a-ae">
     <div class="kt-accordion-header-wrap">
       <button class="kt-flexs-accordion-header kt-acccordion-button-label-show bg-warning btn-lg col-6" onclick="ShowHide('affiche5')">
         <div class="kt-flexs-accordion-title-wrap">
           <span class="kt-flexs-accordion-title"> SOINS EXPERT CHEVEUX</span>
          </div>
          <div class="kt-flexs-accordion-icon-trigger">           
          </div>
        </button>
      </div>
      <div id='affiche5'  style="text-align: justify; margin-left: 40px;display:none"> 
      <div class="kt-accordion-panel">
        <div class="kt-accordion-panel-inner">
          <h3 class="has-very-dark-gray-color has-text-color">SOIN INTENSE DE LUXE – ACTION 2 PHASES </h3>
          <h4 class="has-cyan-bluish-gray-color has-text-color">SOIN AUX SUBSTANCES ACTIVES NATURELLES ET PRÉCIEUSES POUR DES CHEVEUX PLUS BRILLANTS, PLUS RÉSISTANTS ET MIEUX HYDRATÉS</h4>
          <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
            <tbody>
              <tr class="cash-tr">
                <td>Soin Intense de Luxe cheveux courts </td>
                <td> 26€ </td>
              </tr>
              <tr>
                <td>Soin Intense de Luxe cheveux mi-longs </td>
                <td> 36€ </td>
              </tr>
              <tr class="cash-tr">
                <td>Soin Intense de Luxe cheveux longs </td>
                <td> 41€ </td>
              </tr>
            </tbody>
          </table>
          <h3 class="has-very-dark-gray-color has-text-color">SOIN EXPERT PCC </h3>
          <h4 class="has-cyan-bluish-gray-color has-text-color">SOIN 2 PHASES POUR RESTRUCTURER, PRÉSERVER ET PROTÉGER VOS CHEVEUX LORS DE VOTRE COULEUR</h4>
          <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
            <tbody>
              <tr class="cash-tr">
                <td>Soin Expert PCC cheveux courts </td>
                <td> 16€ </td>
              </tr>
              <tr>
                <td>Soin Expert PCC cheveux mi-longs </td>
                <td>21€ </td>
              </tr>
              <tr class="cash-tr">
                <td>Soin Expert PCC cheveux longs </td>
                <td>26€ </td>
              </tr>
            </tbody>
          </table>
          <h3 class="has-very-dark-gray-color has-text-color">SOIN OIL THARAPY</h3>
          <h4 class="has-cyan-bluish-gray-color has-text-color">SOIN 2 PHASES POUR UNE RÉGÉNÉRATION ET UNE PROTECTION DES CHEVEUX EN PROFONDEUR ET PLUS DE BRILLANCE</h4>
          <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
            <tbody>
              <tr class="cash-tr">
                <td>Soin Oil tharapy cheveux courts </td>
                <td>34€ </td>
              </tr>
              <tr>
                <td>Soin Oil tharapy cheveux mi-longs </td>
                <td>40€ </td>
              </tr>
              <tr class="cash-tr">
                <td>Soin Oil tharapy cheveux longs </td>
                <td>46€ </td>
              </tr>
            </tbody>
          </table>
          </div>
       </div>
    </div>
  </div>
  <div class="wp-flex-kadence-pane kt-accordion-pane kt-accordion-pane-6 kt-pane_8e7b56-a2">
    <div class="kt-accordion-header-wrap">
      <button class="kt-flexs-accordion-header kt-acccordion-button-label-show bg-warning btn-lg col-6" onclick="ShowHide('affiche6')">
        <div class="kt-flexs-accordion-title-wrap">
          <span class="kt-flexs-accordion-title">SOINS DU CUIR CHEVELU</span>
        </div>
        <div class="kt-flexs-accordion-icon-trigger">          
        </div>
      </button>
    </div>
    <div id='affiche6'  style="text-align: justify; margin-left: 40px;display:none"> 
    <div class="kt-accordion-panel">
      <div class="kt-accordion-panel-inner">
        <h3 class="has-very-dark-gray-color has-text-color">LOTION SPÉCIFIQUE </h3>
        <h4 class="has-cyan-bluish-gray-color has-text-color">APPLICATION D’UNE LOTION ADAPTÉE À LA NATURE ET AUX BESOINS DU CUIR CHEVELU – RITUEL DÉTENTE</h4>
        <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
          <tbody>
            <tr class="cash-tr">
              <td class="col-8"> Lotion Spécifique </td>
              <td class="col-1"> 9€ </td>
            </tr>
          </tbody>
        </table>
        <h3 class="has-very-dark-gray-color has-text-color">RITUEL RELAXANT </h3>
        <h4 class="has-cyan-bluish-gray-color has-text-color">DÉTENTE DU CUIR CHEVELU, AVEC HUILES ESSENTIELLES</h4>
        <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
          <tbody>
            <tr class="cash-tr">
              <td class="col-8">Rituel Relaxant 15 min</td>
              <td class="col-1"> 16€ </td>
            </tr>
            <tr class="cash-tr">
              <td>Rituel Relaxant 30 min</td>
              <td class="col-1">31€ </td>
            </tr>
          </tbody>
        </table>
        <h3 class="has-very-dark-gray-color has-text-color">RITUEL DÉTOX </h3>
        <h4 class="has-cyan-bluish-gray-color has-text-color">GOMMAGE DUI CUIR CHEVELU – SHAMPOOING SPÉCIFIQUE – BAUME APAISANT – LOTION APAISANTE ANTIPELLICULAIRE AVEC RITUEL DÉTENTE DU CUIR CHEVELU</h4>
        <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
          <tbody>
            <tr class="cash-tr">
              <td class="col-8"> Soin intensif antipelliculaire </td>
              <td class="col-1">26€ </td>
            </tr>
          </tbody>
        </table>
        <h3 class="has-very-dark-gray-color has-text-color">SOIN INTENSIF ANTI-CHUTE </h3>
        <h4 class="has-cyan-bluish-gray-color has-text-color">SHAMPOOING SPÉCIFIQUE – COCKTAIL D’ÉNERGIE CONTRE LA CHUTE DE CHEVEUX – THÉRAPIE ANTI-CHUTE PLUS DERMOSTHÉTIQUE – RITUEL RELAXANT</h4>
        <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
          <tbody>
            <tr class="cash-tr">
              <td class="col-8">Soin intensif antipelliculaire </td>
              <td class="col-1">30€ </td>
            </tr>
          </tbody>
        </table>
        </div>
     </div>
   </div>
  </div>
  <div class="wp-flex-kadence-pane kt-accordion-pane kt-accordion-pane-7 kt-pane_eb6d48-bb">
    <div class="kt-accordion-header-wrap">
      <button class="kt-flexs-accordion-header kt-acccordion-button-label-show bg-warning btn-lg col-6" onclick="ShowHide('affiche7')">
        <div class="kt-flexs-accordion-title-wrap">
          <span class="kt-flexs-accordion-title"> MARIÉE</span>
        </div>
        <div class="kt-flexs-accordion-icon-trigger"></div>
      </button>
    </div>
    <div id='affiche7'  style="text-align: justify; margin-left: 40px;display:none"> 
    <div class="kt-accordion-panel">
      <div class="kt-accordion-panel-inner">
        <h3 class="has-very-dark-gray-color has-text-color"> FORFAIT MARIÉE  </h3>
        <h4 class="has-cyan-bluish-gray-color has-text-color">COIFFURE D’ESSAI, COUPE &amp; BRUSHING – CRÉATION POUR J</h4>
        <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
          <tbody>
            <tr class="cash-tr">
              <td class="col-8"> Forfait Mariée </td>
              <td class="col-1">196€ </td>
            </tr>
            <tr class="cash-tr">
              <td>2ème essai coiffure </td>
              <td  class="col-1">46€ </td>
            </tr>
          </tbody>
        </table>
        </div>
     </div>
   </div>
  </div>
  <div class="wp-flex-kadence-pane kt-accordion-pane kt-accordion-pane-8 kt-pane_da3314-67">
    <div class="kt-accordion-header-wrap">
      <button class="kt-flexs-accordion-header kt-acccordion-button-label-show bg-warning btn-lg col-6" onclick="ShowHide('affiche8')">
        <div class="kt-flexs-accordion-title-wrap">
          <span class="kt-flexs-accordion-title">  JUNIOR </span>
        </div>
        <div class="kt-flexs-accordion-icon-trigger"></div>
      </button>
    </div>
    <div id='affiche8'  style="text-align: justify; margin-left: 40px;display:none"> 
    <div class="kt-accordion-panel">
      <div class="kt-accordion-panel-inner">
        <table class="wp-flex-advgb-table advgb-table-frontend is-style-stripes">
          <tbody>
            <tr class="cash-tr">
              <td class="col-8">  Jeune femme – de 12 ans </td>
              <td class="col-1">18€ </td>
            </tr>
            <tr>
              <td> Jeune femme – de 18 ans </td>
              <td class="col-1">34€ </td>
            </tr>
            <tr class="cash-tr">
              <td> Jeune homme – de 12 ans </td>
              <td class="col-1">16€ </td>
            </tr>
            <tr>
              <td> Jeune homme – de 18 ans </td>
              <td class="col-1">21€ </td>
            </tr>
          </tbody>
        </table>
        </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
 </div>
 </div>
</div>

  </section>


@endsection