@extends('layouts.theme.app')
@section('content')
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
                <li><a href="{{url('/news-event?type=publication')}}">Company Publication (114)</a></li>
                <li><a href="{{url('/news-event?type=media')}}">Media News and Event (15)</a></li>
                <li><a href="{{url('/news-event?type=notice')}}">Company Notice (20)</a></li>
              </ul>
            </div>
            <div class="widget">
              <h4>Recent posts</h4>
              <ul class="recent-posts">
                <li><a href="{{url('/news-event/blog-slug')}}">Lorem ipsum dolor sit amet munere commodo ut nam</a>
                  <div class="clear">
                  </div>
                  <span class="date"><i class="icon-calendar"></i> 6 March, 2013</span>
                  <span class="comment"><i class="icon-comment"></i> 4 Comments</span>
                </li>
                <li><a href="{{url('/news-event/blog-slug')}}">Sea nostrum omittantur ne mea malis nominavi insolens</a>
                  <div class="clear">
                  </div>
                  <span class="date"><i class="icon-calendar"></i> 6 March, 2013</span>
                  <span class="comment"><i class="icon-comment"></i> 2 Comments</span>
                </li>
                <li><a href="{{url('/news-event/blog-slug')}}">Eius graece recusabo no pri odio tale quo id, mea at saepe</a>
                  <div class="clear">
                  </div>
                  <span class="date"><i class="icon-calendar"></i> 4 March, 2013</span>
                  <span class="comment"><i class="icon-comment"></i> 12 Comments</span>
                </li>
                <li><a href="{{url('/news-event/blog-slug')}}">Malorum deserunt at nec usu ad graeco elaboraret at rebum</a>
                  <div class="clear">
                  </div>
                  <span class="date"><i class="icon-calendar"></i> 3 March, 2013</span>
                  <span class="comment"><i class="icon-comment"></i> 3 Comments</span>
                </li>
              </ul>
            </div>
            <!-- <div class="widget">
              <h4>Tags</h4>
              <ul class="tags">
                <li><a href="#" class="btn">Tutorial</a></li>
                <li><a href="#" class="btn">Tricks</a></li>
                <li><a href="#" class="btn">Design</a></li>
                <li><a href="#" class="btn">Trends</a></li>
                <li><a href="#" class="btn">Online</a></li>
              </ul>
            </div> -->
          </aside>
        </div>
        <div class="span8">
          <!-- start article 1 -->
          <article>
            <div class="post-heading">
              <h3><a href="#">Article Title</a></h3>
            </div>
            <ul class="post-meta">
              <li class="first"><i class="icon-calendar"></i><span>March 03, 2013</span></li>
              <li><i class="icon-list-alt"></i><span><a href="#">3 comments</a></span></li>
              <li class="last"><i class="icon-tags"></i><span><a href="#">Design</a>, <a href="#">Blog</a>, <a href="#">Tutorial</a></span></li>
            </ul>
            <div class="post-image">
              <a href="https://unsplash.it/800/400/?random" target="_blank"><img src="https://unsplash.it/800/400/?random" alt="" /></a>
            </div>
            <p>
                  Ei eos suavitate forensibus mnesarchum. Eu est timeam vocibus, an nostro aliquam adipiscing quo. Zril equidem et quo, ad albucius scripserit sit. Vis constituto deseruisse an, interesset reprehendunt et mel, gloriatur concludaturque pro no. At ludus mediocritatem
                  qui, no vituperata assueverit accommodare his.
                </p>
          </article>
          
          <!-- end article 1 -->
        </div>
      </div>
    </div>
</section>
@endsection