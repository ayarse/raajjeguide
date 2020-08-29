<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Samugaa by Vaguthu - Find Local Businesses, Delivery Shops, Your Guide to Maldives</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!-- External Css -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}" />
    {{-- <link rel="stylesheet" href="{{asset('assets/css/et-line.css')}}" /> --}}

    {{-- <link rel="stylesheet" href="assets/css/owl.carousel.min.css" /> --}}
    {{-- <link rel="stylesheet" href="assets/css/slick.css" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/plyr.css') }}" />
    {{-- <link rel="stylesheet" href="assets/css/jquery.timepicker.min.css" /> --}}
    {{-- <link rel="stylesheet" href="assets/css/jquery.nstSlider.min.css" /> --}}
    {{-- <link rel="stylesheet" href="assets/css/datepicker.min.css" /> --}}
    <link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/select2-bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/wickedpicker.min.css')}}" />

    <!-- leaflet -->
    <link rel="stylesheet" href="{{asset('assets/leaflet/css/leaflet.css')}}">
    <link rel="stylesheet" href="{{asset('assets/leaflet/css/MarkerCluster.css')}}">
    <link rel="stylesheet" href="{{asset('assets/leaflet/css/MarkerCluster.Default.css')}}">

    <!-- Custom Css --> 
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css?v=0.4.2')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css?v=0.4.2')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,500%7CSignika:400,600,700" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icon-114x114.png">

    @if(isset($listing))
    <meta property="og:title" content="{{ $listing->title }} - Vaguthu Samugaa">
    <meta property="og:description" content="View {{$listing->title}} contact details on Vaguthu Samugaa.">
    <meta property="og:image" content="{{ asset($listing->cover_pic) }}">
    <meta property="og:url" content="{{ Request::url() }}">
  <meta name="twitter:title" content="{{ $listing->title }} - Vaguthu Samugaa">
    <meta name="twitter:description" content="View {{$listing->title}} contact details on Vaguthu Samugaa.">
    <meta name="twitter:image" content="{{ asset($listing->cover_pic) }}">
    <meta name="twitter:card" content="summary_large_image">
    @else
    <meta property="og:title" content="Samugaa by Vaguthu">
    <meta property="og:description" content="Find Local Businesses, Delivery Shops, Your Guide to Maldives">
    <meta property="og:image" content="{{ asset('images/delivery_og_image02.png') }}">
    <meta property="og:url" content="https://delivery.vaguthu.mv">
    <meta name="twitter:title" content="Samugaa by Vaguthu">
    <meta name="twitter:description" content="Find Local Businesses, Delivery Shops, Your Guide to Maldives">
    <meta name="twitter:image" content="{{ asset('images/delivery_og_image02.png') }}">
    <meta name="twitter:card" content="summary_large_image">
    @endif
    @include('partials.ga')
  </head>
  <body>


  @include('partials.preloader')


    <header>
      <div class="cp-nav nav-3 color-bg">
        <nav class="navbar navbar-expand-lg">
          {{-- <a class="navbar-brand" href="https://vaguthu.mv/?ref=raajjeguide"> --}}
          <a class="navbar-brand" href="{{ route('home') }}">

            {{-- <svg width="96px" height="52px" viewBox="0 0 96 52" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="logo" fill="#fff">
                    <path d="M32.48,40.89 C27.06,44.63 21.58,48.33 16.15,52.08 C17.3833333,49.24 18.6,46.4 19.8,43.56 C24.1999528,43.9821921 28.6239105,43.050649 32.48,40.89" id="Path"></path>
                    <path d="M32.48,40.89 C28,43.89 23.54,45.31 19.11,45.17 L19.8,43.56 C24.1999528,43.9821921 28.6239105,43.050649 32.48,40.89" id="Path"></path>
                    <path d="M39.77,9.39 C44.8036342,16.6440686 44.9718622,26.2160476 40.1962391,33.6425144 C35.4206161,41.0689812 26.6416254,44.8874108 17.9529184,43.3172659 C9.26421136,41.747121 2.37689136,35.0976169 0.502521954,26.4694233 C-1.37184745,17.8412298 2.13586113,8.93353295 9.39,3.9 C19.2965136,-2.96725794 32.8935371,-0.510126311 39.77,9.39 Z M27.26,15.53 L29.09,17.19 L23.49,23.37 L21.84,25.2 L20,23.54 L16.35,20.24 L18,18.41 L21.65,21.72 L27.26,15.53 Z M33.17,14 C36.3498665,18.5915038 36.4486483,24.6469845 33.4202345,29.3397628 C30.3918206,34.0325411 24.8333963,36.4372288 19.3396165,35.4313255 C13.8458366,34.4254221 9.5000421,30.2072858 8.33083601,24.7459293 C7.16162993,19.2845727 9.39957281,13.656943 14,10.49 C20.2653366,6.17693008 28.8393296,7.74681611 33.17,14 Z" id="Shape"></path>
                    <path d="M60.15,25 L59.69,25.53 L60.01,25.43 C59.9988481,25.6566503 60.0951998,25.8752946 60.27,26.02 C60.5053457,26.2251437 60.8412701,26.2678737 61.1204793,26.128182 C61.3996884,25.9884903 61.5669121,25.6940291 61.543849,25.3826778 C61.520786,25.0713266 61.3120016,24.8047179 61.0152576,24.7076894 C60.7185136,24.6106608 60.3925513,24.7024195 60.19,24.94 L60.15,25 Z M47.49,36.06 C47.4873338,36.3905977 47.6167983,36.7085716 47.849633,36.943284 C48.0824677,37.1779964 48.3993916,37.3100108 48.73,37.31 C51.84,37.31 52.01,37.58 55.3,36.31 C57.3,35.08 58.44,33.01 56.63,30.8 C55.22,29.09 55.52,28.96 56.63,29.28 C58.3433661,31.5906973 61.4769825,32.3225388 64.0365911,31.0097749 C66.5961997,29.697011 67.8302457,26.7250967 66.9533725,23.9853817 C66.0764992,21.2456666 63.3461752,19.5425887 60.5,19.96 C57.06,20.46 50.32,25.15 49.3,28.26 C48.55,30.53 50.79,31.45 51.11,32 C50.3020943,32.1972996 49.4793145,32.3277403 48.65,32.39 C47.9635525,32.3954918 47.409978,32.9535305 47.41,33.64 C47.41,34.5 47.49,35.35 47.49,36.06 Z M88.62,26.16 L88,26.47 L88.17,26.19 C87.9475437,26.1421671 87.7594613,25.9946515 87.66,25.79 C87.4838312,25.4221197 87.6294761,24.9807717 87.99,24.79 C88.2362691,24.6500075 88.5395174,24.6565413 88.7795283,24.807011 C89.0195392,24.9574808 89.1575481,25.227584 89.1388443,25.5102438 C89.1201405,25.7929036 88.9477448,26.0424671 88.69,26.16 L88.62,26.16 Z M95.18,25.73 C95.8,20.26 89.26,18.51 85,21 C84.3639216,21.3686907 83.7789349,21.8191976 83.26,22.34 C82.1159973,23.2235953 81.4829504,24.6157318 81.5690065,26.0586723 C81.6550626,27.5016128 82.4490859,28.8086397 83.69,29.55 C81.92,31.1 79.58,31.73 78.69,32.55 C77.45,33.63 79.09,35.87 79.69,37.17 C80.1870042,37.7609899 81.0498077,37.8817824 81.69,37.45 C85.56,36.07 94.36,29.88 95.18,25.73 Z M64.32,36.9 C63.8248506,36.8341075 63.3924178,36.5321502 63.16,36.09 C62.74,35.45 63.44,32.38 63.92,31.79 C64.2078282,31.4405405 64.6372691,31.2386665 65.09,31.24 C66.15,31.24 69.77,31.34 70.21,30.32 C70.58,29.48 66.59,27.52 70.03,24.32 C71.48,22.94 75.28,20 77.44,20 C77.8429073,20.0099272 78.2158558,20.2150489 78.44,20.55 C79.2050746,21.6084172 79.8743843,22.7328573 80.44,23.91 C80.44,25.6 74.85,26.14 76.44,28.71 C78.03,31.28 77.05,33.32 74.84,35.03 C70.84,38.09 68.84,37.27 64.29,36.91 L64.32,36.9 Z M53.49,10.72 C52.6937639,10.6622289 52.077907,9.99832639 52.08,9.2 L52.88,6.26 C53.0310885,5.55840139 53.6523199,5.05808078 54.37,5.06 C59.02,5.06 67.37,7.57 62.76,13.53 C60.1817107,15.9434051 57.2217001,17.9133665 54,19.36 C51.76,20.36 51.29,17.84 50.66,16.12 C50.437454,15.4967763 50.6437053,14.8011837 51.17,14.4 C52.24,13.58 55.48,12.78 56.39,11.4 L53.49,10.72 Z M91.21,6.59 C90.92,6.72 82.21,12.64 81.04,13.64 C80.4092753,14.190341 80.342216,15.1470533 80.89,15.78 L82.38,17.93 C82.922104,18.5496352 83.8606588,18.6208052 84.49,18.09 L94.38,11.28 C94.53,11.22 94.38,11.35 94.8,11.02 C95.3052591,10.4176895 95.3849027,9.56550317 95,8.88 L93.61,6.88 L93.46,6.77 C93.201344,6.44259188 92.8201914,6.23502447 92.4048277,6.19537612 C91.989464,6.15572777 91.5759258,6.28743833 91.26,6.56 L91.21,6.59 Z M72.7,11.4 C71.79,12.78 68.56,13.58 67.48,14.4 C66.957342,14.8038096 66.7552729,15.4989273 66.98,16.12 C67.6,17.84 68.07,20.4 70.31,19.36 C73.5469228,17.9191803 76.5210173,15.9488427 79.11,13.53 C83.7,7.53 75.38,5.06 70.72,5.06 C70.0047158,5.05897519 69.3868458,5.55995086 69.24,6.26 L68.43,9.2 C68.4331589,9.99998827 69.0520753,10.6624903 69.85,10.72 L72.7,11.4 Z" id="Shape"></path>
                    <polygon id="Path" points="52.22 40.45 50.47 47 49.25 47 47.49 40.48 48.68 40.48 49.25 42.48 49.86 45.53 50.46 42.46 51.03 40.46"></polygon>
                    <path d="M56.72,47 L55.51,47 L55.18,45.85 L53.52,45.85 L53.18,47 L52,47 L53.81,40.49 L54.97,40.49 L56.72,47 Z M54.89,44.71 L54.35,42.29 L53.8,44.71 L54.89,44.71 Z" id="Shape" fill-rule="nonzero"></path>
                    <path d="M59.26,43.25 L61.45,43.25 L61.45,45 C61.45,46.43 60.77,47 59.22,47 C57.67,47 57.05,46.39 57.05,45 L57.05,42.35 C57.05,41.02 57.65,40.35 59.22,40.35 C60.79,40.35 61.45,40.91 61.45,42.35 L60.28,42.35 C60.28,41.74 60.13,41.44 59.22,41.44 C58.31,41.44 58.22,41.82 58.22,42.44 L58.22,45 C58.22,45.62 58.39,46 59.22,46 C60.05,46 60.37,45.65 60.37,45 L60.37,44.36 L59.26,44.36 L59.26,43.25 Z" id="Path"></path>
                    <path d="M65.58,40.45 L66.74,40.45 L66.74,45 C66.74,46.35 65.92,47 64.55,47 C63.18,47 62.42,46.36 62.42,45 L62.42,40.45 L63.58,40.45 L63.58,45 C63.58,45.62 63.86,46 64.58,46 C64.8511904,46.0213112 65.1181159,45.9228194 65.3104676,45.7304676 C65.5028194,45.5381159 65.6013112,45.2711904 65.58,45 L65.58,40.45 Z" id="Path"></path>
                    <polygon id="Path" points="71.23 41.51 69.88 41.51 69.88 47 68.72 47 68.72 41.51 67.37 41.51 67.37 40.51 71.23 40.51"></polygon>
                    <polygon id="Path" points="76.26 47 75.1 47 75.1 44.39 73.1 44.39 73.1 47 71.89 47 71.89 40.55 73.07 40.55 73.07 43.32 75.07 43.32 75.07 40.55 76.23 40.55"></polygon>
                    <path d="M80.51,40.45 L81.68,40.45 L81.68,45 C81.68,46.35 80.86,47 79.49,47 C78.12,47 77.35,46.36 77.35,45 L77.35,40.45 L78.52,40.45 L78.52,45 C78.52,45.62 78.79,46 79.52,46 C79.7920885,46.0248952 80.0611659,45.9275645 80.2543652,45.7343652 C80.4475645,45.5411659 80.5448952,45.2720885 80.52,45 L80.51,40.45 Z" id="Path"></path>
                    <path d="M83.87,46.35 C83.87,46.7145079 83.5745079,47.0099999 83.21,47.0099999 C82.8454921,47.0099999 82.55,46.7145079 82.55,46.35 C82.55,45.9854921 82.8454921,45.6900001 83.21,45.6900001 C83.5745079,45.6900001 83.87,45.9854921 83.87,46.35 Z" id="Path"></path>
                    <polygon id="Path" points="87.09 45.42 85.8 42.79 85.93 44.66 85.93 47 84.76 47 84.76 40.44 85.89 40.44 87.22 43.33 88.56 40.44 89.68 40.44 89.68 47 88.51 47 88.51 44.7 88.65 42.83 87.35 45.46"></polygon>
                    <polygon id="Path" points="95.08 40.45 93.33 47 92.1 47 90.34 40.48 91.54 40.48 92.1 42.48 92.71 45.53 93.32 42.46 93.88 40.46"></polygon>
                </g>
            </g>
        </svg> --}}

      <img src="{{ asset('images/samugaa_logo.svg') }}" width="100" alt="">

          </a>
          {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="ti-menu"></span>
          </button> --}}
          <div class="nav-search">
            <a href="#" class="nav-search-toggle"><i class="fas fa-search"></i></a>
            <form action="{{route('search')}}" method="GET">
              {{-- @csrf --}}
              <div class="form-group">
                <input type="text" class="form-control" name='s' value="{{ request('s') }}" placeholder="Keyword">
              </div>
              <div class="form-group">
                <select class="form-control nav-search-category" name="search_category">
                  <option value="">All</option>
                  @isset($categories)
                  @foreach($categories as $category)
                  <option value="{{$category->id}}" @if(request('search_category') == $category->id) selected @endif>{{$category->name}}</option>
                  @endforeach
                  @endisset
                </select>
              </div>
              <button class="button"><i class="fas fa-search"></i></button>
            </form>
          </div>
          <div class="nav-extra">
            <div class="user" style="align-self:center;">
              <a href="#" data-toggle="modal" data-target="#favoritesPopup"><span class="ti-heart"></span></a>
            </div>
              @auth
            <div class="user">
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="ti-power-off"></span></a>
            </div>
            <div class="user">
              <a href="{{ route('add') }}" ><span class="ti-plus"></span></a>
            </div>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
              @endauth
            @guest
            <div class="nav-listing">
              <a href="#" data-toggle="modal" data-target="#accountPopup"><span class="ti-comment"></span><span class="text">Send Listing</span></a>
            </div>
            @endguest

          </div>



          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            {{-- <ul class="navbar-nav ml-auto">
              <li class="menu-item dropdown">
                <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Home</a>
                <ul class="dropdown-menu">
                  <li class="menu-item"><a href="home.html">Home One</a></li>
                  <li class="menu-item"><a href="home-2.html">Home Two</a></li>
                </ul>
              </li>
              <li class="menu-item dropdown">
                <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Listing</a>
                <ul class="dropdown-menu">
                  <li class="menu-item"><a href="listing-right.html">Listing Right</a></li>
                  <li class="menu-item"><a href="listing-left.html">Listing Left</a></li>
                  <li class="menu-item"><a href="listing-map-top.html">Listing Top</a></li>
                  <li class="menu-item"><a href="listing-sidebar.html">Listing Sidebar</a></li>
                  <li class="menu-item"><a href="listing-without-map.html">Listing Without Map</a></li>
                  <li class="menu-item"><a href="listing-details.html">Listing Details</a></li>
                  <li class="menu-item"><a href="post-listing.html">Post Listing</a></li>
                </ul>
              </li>
              <li class="menu-item dropdown">
                <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">User Panel</a>
                <ul class="dropdown-menu">
                  <li class="menu-item"><a href="dashboard.html">Dashboard</a></li>
                  <li class="menu-item"><a href="edit-profile.html">Edit Profile</a></li>
                  <li class="menu-item"><a href="all-listing.html">My Listing</a></li>
                  <li class="menu-item"><a href="dashboard-add-listing.html">Add Listing</a></li>
                  <li class="menu-item"><a href="bookmarked.html">Bookmarked</a></li>
                  <li class="menu-item"><a href="message.html">Message</a></li>
                  <li class="menu-item"><a href="dashboard-pricing.html">Pricing</a></li>
                  <li class="menu-item"><a href="review.html">Review</a></li>
                </ul>
              </li>
              <li class="menu-item dropdown">
                <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Pages</a>
                <ul class="dropdown-menu">
                  <li class="menu-item"><a href="about.html">About Us</a></li>
                  <li class="menu-item"><a href="contact.html">Contact</a></li>
                  <li class="menu-item"><a href="blog-list.html">Blog</a></li>
                  <li class="menu-item"><a href="blog-grid.html">Blog Grid</a></li>
                  <li class="menu-item"><a href="blog-details.html">Blog Details</a></li>
                  <li class="menu-item"><a href="pricing.html">Pricing</a></li>
                </ul>
              </li>
            </ul> --}}
          </div>
        </nav>
      </div>
    </header>
    @include('partials.modal')