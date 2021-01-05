@extends('layouts.theme.app')
@section('content')
<section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Gallery</h3>
              <p>
                Video Gallery
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<section id="breadcrumb">
    <div class="container">
      <div class="row">
        <div class="span12">
          <ul class="breadcrumb notop">
            <li><a href="#">Home</a><span class="divider">/</span></li>
            <li class="active">Video Gallery</li>
          </ul>
        </div>
      </div>
    </div>
</section>
<section id="maincontent">
    <div class="container">
      <!-- <div class="row">
        <div class="span12">
          <ul class="filter">
            <li class="all active"><a href="#" class="btn btn-color">All categories</a></li>
            <li class="web"><a href="#" class="btn btn-color">Web design</a></li>
            <li class="brand"><a href="#" class="btn btn-color">Brand identity</a></li>
            <li class="graphic"><a href="#" class="btn btn-color">Graphic design</a></li>
          </ul>
        </div>
      </div> -->
      <div class="row">
        <ul class="portfolio-area da-thumbs">
          <li class="portfolio-item2" data-id="id-0" data-type="web">
            <iframe width="90%" src="https://www.youtube.com/embed/wjoar7T-Ag4?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </li>
          <li class="portfolio-item2" data-id="id-0" data-type="web">
            <iframe width="90%" src="https://www.youtube.com/embed/wjoar7T-Ag4?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="span12">
          <div class="pagination">
            <ul>
              <li><a href="#">Prev</a></li>
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection