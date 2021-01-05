<!-- top menu -->
          <div class="navigation">
            <nav>
              <ul class="nav topnav">
                <li class="dropdown @if(Request::segment(1) == '' ) active @endif">
                  <a href="{{url('/')}}">Home</a>
                </li>
                <li class="dropdown 
                  @if(Request::segment(1)=='company-overview') active @endif
                  @if(Request::segment(1)=='mission-vision' ) active @endif
                  @if(Request::segment(1)=='chairman-message' ) active @endif
                  @if(Request::segment(1)=='team' ) active @endif
                  ">
                  <a href="{{url('/company-overview')}}">About Us</a>
                  <ul class="dropdown-menu">
                    <li><a href="{{url('/company-overview')}}">Company Overview</a></li>
                    <li><a href="{{url('/mission-vision')}}">Mission & Vison</a></li>
                    <li><a href="{{url('/chairman-message')}}">Chairman Message</a></li>
                    <li><a href="{{url('/team')}}">Team Structure</a></li>
                  </ul>
                </li>
                <li class="dropdown @if(Request::segment(1)=='reports') active @endif">
                  <a href="{{url('/reports')}}">Reports</a>
                  <ul class="dropdown-menu">
                    <li><a href="{{url('/reports?type=annual')}}">Annual Report</a></li>
                    <li><a href="{{url('/reports?type=financial')}}">Financial Report</a></li>
                    <li><a href="{{url('/reports?type=agm')}}">AGM Activities</a></li>
                  </ul>
                </li>
                <li class="dropdown @if(Request::segment(1)=='news-event') active @endif">
                  <a href="{{url('/news-event')}}">News & Event</a>
                  <ul class="dropdown-menu">
                    <li><a href="{{url('/news-event?type=publication')}}">Company Publication</a></li>
                    <li><a href="{{url('/news-event?type=media')}}">Media News & Event</a></li>
                    <li><a href="{{url('/news-event?type=notice')}}">Company Notice</a></li>
                  </ul>
                </li>
                <li class="dropdown 
                  @if(Request::segment(1)=='photo-gallery') active @endif
                  @if(Request::segment(1)=='video-gallery' ) active @endif
                ">
                  <a href="{{url('/photo-gallery')}}">Gallery</a>
                  <ul class="dropdown-menu">
                    <li><a href="{{url('/photo-gallery')}}">Photo Gallery</a></li>
                    <li><a href="{{url('/video-gallery')}}">Video Gallery</a></li>
                  </ul>
                </li>
                <li class="@if(Request::segment(1)=='contact') active @endif">
                  <a href="{{url('/contact')}}">Contact</a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- end menu -->