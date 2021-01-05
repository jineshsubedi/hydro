@extends('layouts.theme.app')
@section('content')
<section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>About us</h3>
              <p>
                Mission and Vision
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
            <li class="active">Mission and Vision</li>
          </ul>
        </div>
      </div>
    </div>
</section>
<section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span4">
          <aside>
            <div class="widget">
              <h4>About Us</h4>
              <ul class="cat">
                <li><a href="#">Company Overview</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">Chairman Message</a></li>
                <li><a href="#">Mission & Vision</a></li>
              </ul>
            </div>
          </aside>
        </div>
        <div class="span8">
          <div class="well">
            <div style="text-align:justify">
              <h2>Mission</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Nulla porttitor accumsan tincidunt. Nulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.
              </p>
              <h2>Vision</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Nulla porttitor accumsan tincidunt. Nulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection