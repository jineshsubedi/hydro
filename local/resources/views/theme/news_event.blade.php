@extends('layouts.theme.app')
@section('content')
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0&appId=1868322490092491&autoLogAppEvents=1" nonce="0w4Hu9dn"></script>
<section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>News & Event</h3>
              <p>
                Company Notice
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
            <li><a href="index.html">Home</a><span class="divider">/</span></li>
            <li class="active">Company Notice</li>
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
              <form class="form-search">
                <input placeholder="Type something" type="text" class="input-medium search-query">
                <button type="submit" class="btn btn-flat btn-color">Search</button>
              </form>
            </div>
            <div class="widget">
              <h4>Categories</h4>
              <ul class="cat">
                <li><a href="#">Company Publication (114)</a></li>
                <li><a href="#">Media News and Event (15)</a></li>
                <li><a href="#">Company Notice (20)</a></li>
              </ul>
            </div>
            <div class="widget">
              <h4>Recent posts</h4>
              <ul class="recent-posts">
                <li><a href="{{url('/news-event/blog-slug')}}">Lorem ipsum dolor sit amet munere commodo ut nam</a>
                  <div class="clear">
                  </div>
                  <span class="date"><i class="icon-calendar"></i> 6 March, 2013</span>
                </li>
                <li><a href="{{url('/news-event/blog-slug')}}">Sea nostrum omittantur ne mea malis nominavi insolens</a>
                  <div class="clear">
                  </div>
                  <span class="date"><i class="icon-calendar"></i> 6 March, 2013</span>
                </li>
                <li><a href="{{url('/news-event/blog-slug')}}">Eius graece recusabo no pri odio tale quo id, mea at saepe</a>
                  <div class="clear">
                  </div>
                  <span class="date"><i class="icon-calendar"></i> 4 March, 2013</span>
                </li>
                <li><a href="{{url('/news-event/blog-slug')}}">Malorum deserunt at nec usu ad graeco elaboraret at rebum</a>
                  <div class="clear">
                  </div>
                  <span class="date"><i class="icon-calendar"></i> 3 March, 2013</span>
                </li>
              </ul>
            </div>
            <div class="widget">
              <h4>Facebook</h4>
              <div class="fb-page" data-href="https://www.facebook.com/jineshcast" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/jineshcast" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/jineshcast">Jineshsubedi.com.np</a></blockquote></div>
            </div>
          </aside>
        </div>
        <div class="span8">
          <!-- start article 1 -->
          <article class="blog-post">
            <div class="post-heading">
              <h3><a href="#">Article</a></h3>
            </div>
            <div class="row">
              <div class="span3">
                <div class="post-image">
                  <a href="{{url('/news-event/blog-slug')}}"><img src="https://unsplash.it/400/300/?random" alt="" /></a>
                </div>
                <!-- <div class="video-container">
                  <iframe src="http://player.vimeo.com/video/30585464?title=0&amp;byline=0">
                  </iframe>
                </div> -->
              </div>
              <div class="span5">
                <ul class="post-meta">
                  <li class="first"><i class="icon-calendar"></i><span>March 03, 2013</span></li>
                  <li class="last"><i class="icon-tags"></i><span><a href="blog.html?type=publication">Company Publication</a></span></li>
                </ul>
                <div class="clearfix">
                </div>
                <p>
                  Ei eos suavitate forensibus mnesarchum. Eu est timeam vocibus, an nostro aliquam adipiscing quo. Zril equidem et quo, ad albucius scripserit sit. Vis constituto deseruisse an, interesset reprehendunt et mel, gloriatur concludaturque pro no. At ludus mediocritatem
                  qui, no vituperata assueverit accommodare his.
                </p>
                <a href="{{url('/news-event/blog-slug')}}" class="btn btn-small btn-success" type="button">Read more</a>
              </div>
            </div>
          </article>
          <!-- end article 1 -->
          <article class="blog-post">
            <div class="post-heading">
              <h3><a href="#">Article</a></h3>
            </div>
            <div class="row">
              <div class="span3">
                <div class="post-image">
                  <a href="{{url('/news-event/blog-slug')}}"><img src="https://unsplash.it/400/300/?random" alt="" /></a>
                </div>
              </div>
              <div class="span5">
                <ul class="post-meta">
                  <li class="first"><i class="icon-user"></i><span>March 03, 2013</span></li>
                  <li class="last"><i class="icon-tags"></i><span><a href="blog.html?type=news-event">News & Event</a></span></li>
                </ul>
                <div class="clearfix">
                </div>
                <p>
                  Ei eos suavitate forensibus mnesarchum. Eu est timeam vocibus, an nostro aliquam adipiscing quo. Zril equidem et quo, ad albucius scripserit sit. Vis constituto deseruisse an, interesset reprehendunt et mel, gloriatur concludaturque pro no. At ludus mediocritatem
                  qui, no vituperata assueverit accommodare his.
                </p>
                <a href="{{url('/news-event/blog-slug')}}" class="btn btn-small btn-success" type="button">Read more</a>
              </div>
            </div>
          </article>
          <article class="blog-post">
            <div class="post-heading">
              <h3><a href="#">Article</a></h3>
            </div>
            <div class="row">
              <div class="span3">
                <div class="post-image">
                  <a href="{{url('/news-event/blog-slug')}}"><img src="https://unsplash.it/400/300/?random" alt="" /></a>
                </div>
              </div>
              <div class="span5">
                <ul class="post-meta">
                  <li class="first"><i class="icon-user"></i><span>March 03, 2013</span></li>
                  <li class="last"><i class="icon-tags"></i><span><a href="blog.html?type=news-event">News & Event</a></span></li>
                </ul>
                <div class="clearfix">
                </div>
                <p>
                  Ei eos suavitate forensibus mnesarchum. Eu est timeam vocibus, an nostro aliquam adipiscing quo. Zril equidem et quo, ad albucius scripserit sit. Vis constituto deseruisse an, interesset reprehendunt et mel, gloriatur concludaturque pro no. At ludus mediocritatem
                  qui, no vituperata assueverit accommodare his.
                </p>
                <a href="{{url('/news-event/blog-slug')}}" class="btn btn-small btn-success" type="button">Read more</a>
              </div>
            </div>
          </article>
          <article class="blog-post">
            <div class="post-heading">
              <h3><a href="#">Article</a></h3>
            </div>
            <div class="row">
              <div class="span3">
                <div class="post-image">
                  <a href="{{url('/news-event/blog-slug')}}"><img src="https://unsplash.it/400/300/?random" alt="" /></a>
                </div>
              </div>
              <div class="span5">
                <ul class="post-meta">
                  <li class="first"><i class="icon-user"></i><span>March 03, 2013</span></li>
                  <li class="last"><i class="icon-tags"></i><span><a href="blog.html?type=notice">Notice</a></span></li>
                </ul>
                <div class="clearfix">
                </div>
                <p>
                  Ei eos suavitate forensibus mnesarchum. Eu est timeam vocibus, an nostro aliquam adipiscing quo. Zril equidem et quo, ad albucius scripserit sit. Vis constituto deseruisse an, interesset reprehendunt et mel, gloriatur concludaturque pro no. At ludus mediocritatem
                  qui, no vituperata assueverit accommodare his.
                </p>
                <a href="{{url('/news-event/blog-slug')}}" class="btn btn-small btn-success" type="button">Read more</a>
              </div>
            </div>
          </article>
          <article class="blog-post">
            <div class="post-heading">
              <h3><a href="#">Article</a></h3>
            </div>
            <div class="row">
              <div class="span3">
                <div class="post-image">
                  <a href="{{url('/news-event/blog-slug')}}"><img src="https://unsplash.it/400/300/?random" alt="" /></a>
                </div>
              </div>
              <div class="span5">
                <ul class="post-meta">
                  <li class="first"><i class="icon-user"></i><span>March 03, 2013</span></li>
                  <li class="last"><i class="icon-tags"></i><span><a href="blog.html?type=notice">Notice</a></span></li>
                </ul>
                <div class="clearfix">
                </div>
                <p>
                  Ei eos suavitate forensibus mnesarchum. Eu est timeam vocibus, an nostro aliquam adipiscing quo. Zril equidem et quo, ad albucius scripserit sit. Vis constituto deseruisse an, interesset reprehendunt et mel, gloriatur concludaturque pro no. At ludus mediocritatem
                  qui, no vituperata assueverit accommodare his.
                </p>
                <a href="{{url('/news-event/blog-slug')}}" class="btn btn-small btn-success" type="button">Read more</a>
              </div>
            </div>
          </article>
          <article class="blog-post">
            <div class="post-heading">
              <h3><a href="#">Article</a></h3>
            </div>
            <div class="row">
              <div class="span3">
                <div class="post-image">
                  <a href="{{url('/news-event/blog-slug')}}"><img src="https://unsplash.it/400/300/?random" alt="" /></a>
                </div>
              </div>
              <div class="span5">
                <ul class="post-meta">
                  <li class="first"><i class="icon-user"></i><span>March 03, 2013</span></li>
                  <li class="last"><i class="icon-tags"></i><span><a href="blog.html?type=publication">Company Publication</a></span></li>
                </ul>
                <div class="clearfix">
                </div>
                <p>
                  Ei eos suavitate forensibus mnesarchum. Eu est timeam vocibus, an nostro aliquam adipiscing quo. Zril equidem et quo, ad albucius scripserit sit. Vis constituto deseruisse an, interesset reprehendunt et mel, gloriatur concludaturque pro no. At ludus mediocritatem
                  qui, no vituperata assueverit accommodare his.
                </p>
                <a href="{{url('/news-event/blog-slug')}}" class="btn btn-small btn-success" type="button">Read more</a>
              </div>
            </div>
          </article>
          <div class="pagination">
            <ul>
              <li><a href="#">Prev</a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection