@extends('layouts.importLayout')

@section('content')
  <body id="top">
    <div class="page">
    <div class="page">
    <header >
        <div class="pp-header" data-stellar-background-ratio="0.5" style=" margin-top: 10%; ">
          <nav class="navbar navbar-expand-lg navbar-light">
           
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
               
              </div>
            </div>
          </nav>
        </div>
      </header>
      <div class="page-content">
        <div class="container">
<div class="container pp-section">
  <div class="row">
    <div class="col-md-9 col-sm-12 px-0">
      <h1 class="h3">Bienvenue dans la gallery photo</h1>
    </div>
  </div>
</div>
<div class="container px-0 py-4">
  <div class="pp-category-filter">
    <div class="row">
      <div class="col-sm-12">
        <a class="btn btn-primary pp-filter-button" href="#" data-filter="all">Tout Voir</a>
        <a class="btn btn-outline-primary pp-filter-button" href="#" data-filter="people">Coiffure</a>
        <a class="btn btn-outline-primary pp-filter-button" href="#" data-filter="nature">Make_up</a>
        <a class="btn btn-outline-primary pp-filter-button" href="#" data-filter="computer">Massage</a>
      </div>
    </div>
  </div>
</div>
<div class="container px-0">
  <div class="pp-gallery">
    <div class="card-columns">
      <div class="card" data-groups="[&quot;nature&quot;]"><a href="{{('detail_img')}}">
          <figure class="pp-effect"><img class="img-fluid" src="images/1-nature.jpg" alt="Nature"/>
            <figcaption>
              <div class="h4">Coiffure</div>
              <p>Nature</p>
            </figcaption>
          </figure></a></div>
      <div class="card" data-groups="[&quot;nature&quot;]"><a href="{{('detail_img')}}">
          <figure class="pp-effect"><img class="img-fluid" src="images/2-nature.jpg" alt="Nature"/>
            <figcaption>
              <div class="h4">Bird</div>
              <p>Nature</p>
            </figcaption>
          </figure></a></div>
      <div class="card" data-groups="[&quot;nature&quot;]"><a href="{{('detail_img')}}">
          <figure class="pp-effect"><img class="img-fluid" src="images/4-nature.jpg" alt="Nature"/>
            <figcaption>
              <div class="h4">Sunrise</div>
              <p>Nature</p>
            </figcaption>
          </figure></a></div>
      <div class="card" data-groups="[&quot;nature&quot;]"><a href="{{('detail_img')}}">
          <figure class="pp-effect"><img class="img-fluid" src="images/5-nature.jpg" alt="Nature"/>
            <figcaption>
              <div class="h4">Greenery</div>
              <p>Nature</p>
            </figcaption>
          </figure></a></div>
      <div class="card" data-groups="[&quot;nature&quot;]"><a href="{{('detail_img')}}">
          <figure class="pp-effect"><img class="img-fluid" src="images/8-nature.jpg" alt="Nature"/>
            <figcaption>
              <div class="h4">Bird</div>
              <p>Nature</p>
            </figcaption>
          </figure></a></div>
      <div class="card" data-groups="[&quot;nature&quot;]"><a href="{{('detail_img')}}">
          <figure class="pp-effect"><img class="img-fluid" src="images/9-nature.jpg" alt="Nature"/>
            <figcaption>
              <div class="h4">Flower</div>
              <p>Nature</p>
            </figcaption>
          </figure></a></div>
      <div class="card" data-groups="[&quot;people&quot; , &quot;nature&quot;]"><a href="{{('detail_img')}}">
          <figure class="pp-effect"><img class="img-fluid" src="images/10-people.jpg" alt="People"/>
            <figcaption>
              <div class="h4">Model</div>
              <p>People</p>
            </figcaption>
          </figure></a></div>
      <div class="card" data-groups="[&quot;people&quot;]"><a href="{{('detail_img')}}">
          <figure class="pp-effect"><img class="img-fluid" src="images/11-people.jpg" alt="People"/>
            <figcaption>
              <div class="h4">Cute</div>
              <p>People</p>
            </figcaption>
          </figure></a></div>
      <div class="card" data-groups="[&quot;people&quot;]"><a href="{{('detail_img')}}">
          <figure class="pp-effect"><img class="img-fluid" src="images/13-people.jpg" alt="People"/>
            <figcaption>
              <div class="h4">Model</div>
              <p>People</p>
            </figcaption>
          </figure></a></div>
      <div class="card" data-groups="[&quot;people&quot;]"><a href="{{('detail_img')}}">
          <figure class="pp-effect"><img class="img-fluid" src="images/14-people.jpg" alt="People"/>
            <figcaption>
              <div class="h4">Model</div>
              <p>People</p>
            </figcaption>
          </figure></a></div>
      <div class="card" data-groups="[&quot;people&quot;]"><a href="{{('detail_img')}}">
          <figure class="pp-effect"><img class="img-fluid" src="images/16-people.jpg" alt="People"/>
            <figcaption>
              <div class="h4">Model</div>
              <p>People</p>
            </figcaption>
          </figure></a></div>
      <div class="card" data-groups="[&quot;people&quot; , &quot;nature&quot;]"><a href="{{('detail_img')}}">
          <figure class="pp-effect"><img class="img-fluid" src="images/17-people.jpg" alt="People"/>
            <figcaption>
              <div class="h4">Model</div>
              <p>People</p>
            </figcaption>
          </figure></a></div>
      <div class="card" data-groups="[&quot;computer&quot;]"><a href="{{('detail_img')}}">
          <figure class="pp-effect"><img class="img-fluid" src="images/18-computer.jpg" alt="Computer"/>
            <figcaption>
              <div class="h4">Laptop</div>
              <p>Computer</p>
            </figcaption>
          </figure></a></div>
      <div class="card" data-groups="[&quot;computer&quot;]"><a href="{{('detail_img')}}">
          <figure class="pp-effect"><img class="img-fluid" src="images/19-computer.jpg" alt="Computer"/>
            <figcaption>
              <div class="h4">Laptop</div>
              <p>Computer</p>
            </figcaption>
          </figure></a></div>
      <div class="card" data-groups="[&quot;computer&quot;]"><a href="{{('detail_img')}}">
          <figure class="pp-effect"><img class="img-fluid" src="images/20-computer.jpg" alt="Computer"/>
            <figcaption>
              <div class="h4">Laptop</div>
              <p>Computer</p>
            </figcaption>
          </figure></a></div>
      <div class="card" data-groups="[&quot;computer&quot;]"><a href="{{('detail_img')}}">
          <figure class="pp-effect"><img class="img-fluid" src="images/23-computer.jpg" alt="Computer"/>
            <figcaption>
              <div class="h4">Laptop</div>
              <p>Computer</p>
            </figcaption>
          </figure></a></div>
      <div class="card" data-groups="[&quot;computer&quot;]"><a href="{{('detail_img')}}">
          <figure class="pp-effect"><img class="img-fluid" src="images/24-computer.jpg" alt="Computer"/>
            <figcaption>
              <div class="h4">Laptop</div>
              <p>Computer</p>
            </figcaption>
          </figure></a></div>
      <div class="card" data-groups="[&quot;food&quot;]"><a href="{{('detail_img')}}">
          <figure class="pp-effect"><img class="img-fluid" src="images/26-food.jpg" alt="Food"/>
            <figcaption>
              <div class="h4">Fruit Salad</div>
              <p>Food</p>
            </figcaption>
          </figure></a></div>
      <div class="card" data-groups="[&quot;food&quot;]"><a href="{{('detail_img')}}">
          <figure class="pp-effect"><img class="img-fluid" src="images/27-food.jpg" alt="Food"/>
            <figcaption>
              <div class="h4">Oranges</div>
              <p>Food</p>
            </figcaption>
          </figure></a></div>
      <div class="card" data-groups="[&quot;food&quot;]"><a href="{{('detail_img')}}">
          <figure class="pp-effect"><img class="img-fluid" src="images/28-food.jpg" alt="Food"/>
            <figcaption>
              <div class="h4">Lemon Tea</div>
              <p>Food</p>
            </figcaption>
          </figure></a></div>
      <div class="card" data-groups="[&quot;food&quot;]"><a href="{{('detail_img')}}">
          <figure class="pp-effect"><img class="img-fluid" src="images/29-food.jpg" alt="Food"/>
            <figcaption>
              <div class="h4">Pasta</div>
              <p>Food</p>
            </figcaption>
          </figure></a></div>
      <div class="card" data-groups="[&quot;food&quot;]"><a href="{{('detail_img')}}">
          <figure class="pp-effect"><img class="img-fluid" src="images/30-food.jpg" alt="Food"/>
            <figcaption>
              <div class="h4">Burger</div>
              <p>Food</p>
            </figcaption>
          </figure></a></div>
    </div>
  </div>
</div>
<div class="pp-section"></div></div>
      </div>
    </div>
  @endsection