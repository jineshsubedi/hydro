@extends('layouts.theme.app')
@section('content')
  
  <section id="slider">
    <div id="myCarousel" class="carousel slide"> 
      <!-- Carousel items --> 
      <div class="carousel-inner"> 
        <div class="active item">
          <img class="d-block w-100" src="https://picsum.photos/1600/700?random=1" alt="First slide">
          <div class="carousel-caption">
            <h3>What we Do</h3>
          </div>
        </div> 
        <div class="item">
          <img class="d-block w-100" src="https://picsum.photos/1600/700?random=2" alt="Second slide">
          <div class="carousel-caption">
            <h3>How we Do</h3>
          </div>
        </div> 
        <div class="item">
          <img class="d-block w-100" src="https://picsum.photos/1600/700?random=3" alt="Third slide">
          <div class="carousel-caption">
            <h3>When we Do</h3>
          </div>
        </div> 
      </div> 
      <!-- Carousel nav --> 
      <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a> 
      <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a> 
    </div>
  </section>

  <section id="about" class="container">
    <div class="row">
      <div class="span8">
        <h1><span>ABOUT</span> <span style="color:#69a50a">OUR COMPANY</span></h1>
        <p style="text-align:justify;">
          NVivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat. Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla porttitor accumsan tincidunt. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.
        </p>
        <p style="text-align:justify;">
          Lorem ipsum dolor sit amet, per cu graece fierent dignissim, et reque dicat blandit quo, ad mel stet aperiri insolens. Eum esse ancillae conclusionemque at. Ut nec ullum homero. Autem legimus in sed. Ad eam iudico delectus, aperiri maiestatis eos eu. Mea viris abhorreant at, eirmod vivendo an ius.
        </p>
        <p>
          <a href="#" class="btn btn-large btn-color">Read More</a>
        </p>
      </div>
      <div class="span4">
        <img src="https://upload.wikimedia.org/wikipedia/commons/d/de/Farping_Reservoir.jpg" style="width:100%">
      </div>
    </div>
  </section>

  <section id="Features" class="container">
      <div class="tagline_text">
        <h2>RECENT <span style="color:#69a50a">UPDATE</span></h2>
      </div>
      <div class="row">
        <div class="span3 features">
          <i class="icon-circled icon-32 icon-suitcase left active"></i>
          <h4>Responsive bootstrap</h4>
          <div class="dotted_line">
          </div>
          <p class="left">
            Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
          </p>
          <a href="#">Learn more</a>
        </div>
        <div class="span3 features">
          <i class="icon-circled icon-32 icon-plane left"></i>
          <h4>Lot of features</h4>
          <div class="dotted_line">
          </div>
          <p class="left">
            Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
          </p>
          <a href="#">Learn more</a>
        </div>
        <div class="span3 features">
          <i class="icon-circled icon-32 icon-leaf left"></i>
          <h4>Multipurpose template</h4>
          <div class="dotted_line">
          </div>
          <p class="left">
            Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
          </p>
          <a href="#">Learn more</a>
        </div>
        <div class="span3 features">
          <i class="icon-circled icon-32 icon-wrench left"></i>
          <h4>With latest technology</h4>
          <div class="dotted_line">
          </div>
          <p class="left">
            Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
          </p>
          <a href="#">Learn more</a>
        </div>
      </div>
  </section>

  <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="home-posts">
          <div class="span12">
            <h3>RECENT <span style="color:#69a50a">NEWS & EVENT</span></h3>
          </div>
          <div class="span3">
            <div class="post-image">
              <a href="post_right_sidebar.html">
                         <img src="https://picsum.photos/400/300?random=1" alt="">
                      </a>
            </div>
            <div class="entry-meta">
              <span class="icon-square date">Sep 17 2013</span>
            </div>
            <!-- end .entry-meta -->
            <div class="entry-body">
              <a href="post_right_sidebar.html">
                <h5 class="title">This is a standard post</h5>
              </a>
              <p>
                Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor aenean massa.
              </p>
            </div>
            <!-- end .entry-body -->
            <div class="clear">
            </div>
          </div>
          <div class="span3">
            <div class="post-image">
              <a href="#"><img src="https://picsum.photos/400/300?random=2" alt=""></a>
            </div>
            <div class="entry-meta">
              <span class="icon-square date">Sep 17 2013</span>
            </div>
            <!-- end .entry-meta -->
            <div class="entry-body">
              <a href="post_right_sidebar.html">
                <h5 class="title">Example post image format</h5>
              </a>
              <p>
                Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor aenean massa.
              </p>
            </div>
            <!-- end .entry-body -->
            <div class="clear">
            </div>
          </div>
          <div class="span3">
            <div class="post-image">
              <a href="#"><img src="https://picsum.photos/400/300?random=3" alt=""></a>
            </div>
            <div class="entry-meta">
              <span class="icon-square date">Sep 17 2011</span>
            </div>
            <!-- end .entry-meta -->
            <div class="entry-body">
              <a href="post_right_sidebar.html">
                <h5 class="title">Amazing video post format</h5>
              </a>
              <p>
                Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.
              </p>
            </div>
            <!-- end .entry-body -->
            <div class="clear">
            </div>
          </div>
          <div class="span3">
            <div class="post-image">
              <a href="#"><img src="https://picsum.photos/400/300?random=4" alt=""></a>
            </div>
            <div class="entry-meta">
              <span class="icon-square date">Sep 17 2011</span>
            </div>
            <!-- end .entry-meta -->
            <div class="entry-body">
              <a href="post_right_sidebar.html">
                <h5 class="title">Amazing video post format</h5>
              </a>
              <p>
                Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.
              </p>
            </div>
            <!-- end .entry-body -->
            <div class="clear">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="home-posts">
          <div class="span12">
            <h3>OUR <span style="color:#69a50a">GALLERY</span></h3>
          </div>
          <div class="span12">
              <div class="module">
                <div class="scroll2">
                  <a href="#">
                    <div class="scroll_item">
                      <h3>Caption 1</h3>
                      <div class="img">
                        <img src="https://unsplash.it/400/300/?random=2" alt="" />
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="scroll_item">
                      <h3>Caption 2</h3>
                      <div class="img">
                        <img src="https://placeimg.com/400/300/people" alt="" />
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="scroll_item">
                      <h3>Caption 3</h3>
                      <div class="img">
                        <img src="https://placeimg.com/400/300/arch" alt="" />
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="scroll_item">
                      <h3>Caption 4</h3>
                      <div class="img">
                        <img src="https://placeimg.com/400/300/arch/sepia" alt="" />
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="scroll_item">
                      <h3>Caption 5</h3>
                      <div class="img">
                        <img src="https://unsplash.it/400/300/?random=1" alt="" />
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="scroll_item">
                      <h3>Caption 6</h3>
                      <div class="img">
                        <img src="https://placeimg.com/400/300/people" alt="" />
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="scroll_item">
                      <h3>Caption 7</h3>
                      <div class="img">
                        <img src="https://placeimg.com/400/300/arch" alt="" />
                      </div>
                    </div>
                  </a>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
@endsection
