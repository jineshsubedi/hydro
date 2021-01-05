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
                Company Overview
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
            <li class="active">Company Overview</li>
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
              <h4>Company Overview</h4>
              <p>
                Vivamus suscipit tortor eget felis porttitor volutpat. Nulla quis lorem ut libero malesuada feugiat. Vivamus suscipit tortor eget felis porttitor volutpat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus suscipit tortor eget felis porttitor volutpat. Donec rutrum congue leo eget malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla quis lorem ut libero malesuada feugiat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla porttitor accumsan tincidunt.
              </p>
              <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec sollicitudin molestie malesuada.</p>
              <p>Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection