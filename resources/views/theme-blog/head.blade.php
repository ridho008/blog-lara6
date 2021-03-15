<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

   <title>@yield('title')</title>

   <!-- Meta Tag -->
   <meta name="description" content="{{ $setting->meta_description }}">
   <meta name="keywords" content="{{ $setting->meta_keyword }}">
   <meta name="google-site-verification" content="{{ $setting->google_analytics }}"/>
   <meta name="author" content="Ridho Surya">
   <meta name="robots" content="noindex,nofollow">

   <!-- Google font -->
   <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">

   <!-- Bootstrap -->
   <link type="text/css" rel="stylesheet" href="{{ asset('fronend/css/bootstrap.min.css') }}" />

   <!-- Font Awesome Icon -->
   <link rel="stylesheet" href="{{ asset('fronend/css/font-awesome.min.css') }}">

   <!-- Custom stlylesheet -->
   <link rel="icon" href="{{ URL::asset('uploads/favicon/'.$setting->favicon) }}" type="image/x-icon"/>
   <link type="text/css" rel="stylesheet" href="{{ asset('fronend/css/style.css') }}" />

   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

</head>

<body>
   <!-- HEADER -->
   <header id="header">
      <!-- NAV -->
      <div id="nav">
         <!-- Top Nav -->
         <div id="nav-top">
            <div class="container">
               <!-- social -->
               <ul class="nav-social">
                  <li><a href="{{ $setting->facebook }}"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="{{ $setting->twitter }}"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="{{ $setting->instagram }}"><i class="fa fa-instagram"></i></a></li>
               </ul>
               <!-- /social -->

               <!-- logo -->
               <div class="nav-logo">
                  <a href="{{ url('/') }}" class="logo"><img src="{{ asset('uploads/logo/' . $setting->logo) }}" alt="{{ $setting->logo }}"></a>
               </div>
               <!-- /logo -->

               <!-- search & aside toggle -->
               <div class="nav-btns">
                  <button class="aside-btn"><i class="fa fa-bars"></i></button>
                  <button class="search-btn"><i class="fa fa-search"></i></button>
                  <div id="nav-search">
                     <form method="get" action="{{ route('blog.search') }}">
                        <input class="input" type="text" name="keyword" placeholder="Enter your search...">
                     </form>
                     <button class="nav-close search-close">
                        <span></span>
                     </button>
                  </div>
               </div>
               <!-- /search & aside toggle -->
            </div>
         </div>
         <!-- /Top Nav -->

         <!-- Main Nav -->
         <div id="nav-bottom">
            <div class="container">
               <!-- nav -->
               <ul class="nav-menu">
                  <li><a href="{{ url('/') }}"
                     @if(Request::path() == '/')
                     style="color:#ee4462;"
                     @endif
                     >Home</a></li>
                  <li class="has-dropdown">
                     <a href="#">Categories</a>
                     <div class="dropdown">
                        <div class="dropdown-body">
                           <div class="row">
                              <div class="col-md-3">
                                 <ul class="dropdown-list">
                                    @foreach($categori as $category)
                                    <li><a href="{{ route('blog.category', $category->slug) }}">{{ $category->name }}</a></li>
                                    @endforeach
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li><a href="{{ route('blog.list') }}"
                     @if(Request::path() == 'list-posts')
                     style="color:#ee4462;"
                     @endif
                     >List Post</a></li>
                  <li><a href="{{ route('blog.about') }}"
                     @if(Request::path() == 'about')
                     style="color:#ee4462;"
                     @endif
                     >About</a></li>
                  {{-- <li><a href="#">Travel</a></li> --}}
               </ul>
               <!-- /nav -->
            </div>
         </div>
         <!-- /Main Nav -->

         <!-- Aside Nav -->
         <div id="nav-aside">
            <ul class="nav-aside-menu">
               <li><a href="index.html">Home</a></li>
               <li class="has-dropdown"><a>Categories</a>
                  <ul class="dropdown">
                     @foreach($categori as $category)
                     <li><a href="{{ route('blog.category', $category->slug) }}">{{ $category->name }}</a></li>
                     @endforeach
                  </ul>
               </li>
               <li><a href="about.html">About Us</a></li>
               <li><a href="contact.html">Contacts</a></li>
               {{-- <li><a href="#">Advertise</a></li> --}}
            </ul>
            <button class="nav-close nav-aside-close"><span></span></button>
         </div>
         <!-- /Aside Nav -->
      </div>
      <!-- /NAV -->
   </header>
   <!-- /HEADER -->