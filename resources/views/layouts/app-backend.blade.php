<?php
$settingBack = App\Setting::find(1);
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
   <!-- Head -->
   <head>
      <title>@yield('title') | Blog</title>

      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="x-ua-compatible" content="ie=edge">

      <!-- Favicon -->
      <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

      <!--  Social tags -->
      <meta name="keywords" content="Awesome Dashboard UI Kit, Bootstrap, Template, Theme, Freebies, MIT license, Free, Download">
      <meta name="description" content="Awesome Dashboard UI Kit crafted by Htmlstream">
      <meta name="author" content="htmlstream.com">

      <!-- Schema.org -->
      <meta itemprop="name" content="Awesome Dashboard UI Kit">
      <meta itemprop="description" content="Awesome Dashboard UI Kit crafted by Htmlstream">
      <meta itemprop="image" content="assets/img-temp/aduik-preview.png">

      <!-- Twitter Card -->
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:site" content="@htmlstream">
      <meta name="twitter:title" content="Awesome Dashboard UI Kit">
      <meta name="twitter:description" content="Awesome Dashboard UI Kit crafted by Htmlstream">
      <meta name="twitter:creator" content="@htmlstream">
      <meta name="twitter:image" content="assets/img-temp/aduik-preview.png">

      <!-- Open Graph -->
      <meta property="og:type" content="website">
      <meta property="og:site_name" content="Htmlstream">
      <meta property="og:title" content="Awesome Dashboard UI Kit">
      <meta property="og:description" content="Awesome Dashboard UI Kit crafted by Htmlstream">
      <meta property="og:url" content="https://htmlstream.com/preview/awesome-dashboard-ui-kit/">
      <meta property="og:locale" content="en_US">
      <meta property="og:image" content="assets/img-temp/aduik-preview.png">
      <meta property="og:image:secure_url" content="assets/img-temp/aduik-preview.png">

      <!-- Web Fonts -->
      <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

      <!-- Components Vendor Styles -->
      <link rel="stylesheet" href="{{ asset('assets/vendor/themify-icons/themify-icons.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">

      <!-- Theme Styles -->
      <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
   </head>
   <!-- End Head -->

   <!-- Body -->
   <body>
      <!-- Header (Topbar) -->
      <header class="u-header">
         <!-- Header Left Section -->
         <div class="u-header-left">
            <!-- Header Logo -->
            <a class="u-header-logo" href="index.html">
               <img class="u-header-logo__icon" src="{{ asset('uploads/logo/'.$settingBack->logo) }}" alt="Awesome Icon">
               {{-- <img class="u-header-logo__text" src="assets/svg/logo-text-light.svg" alt="Awesome"> --}}
            </a>
            <!-- End Header Logo -->
         </div>
         <!-- End Header Left Section -->

         <!-- Header Middle Section -->
         <div class="u-header-middle">
            <!-- Sidebar Invoker -->
            <div class="u-header-section">
               <a class="js-sidebar-invoker u-header-invoker u-sidebar-invoker" href="#"
                  data-is-close-all-except-this="true"
                  data-target="#sidebar">
                  <span class="ti-align-left u-header-invoker__icon u-sidebar-invoker__icon--open"></span>
                  <span class="ti-align-justify u-header-invoker__icon u-sidebar-invoker__icon--close"></span>
               </a>
            </div>
            <!-- End Sidebar Invoker -->

            <!-- Header Search -->
            <div class="u-header-section justify-content-sm-start flex-grow-1 py-0">
               <div class="u-header-search"
                    data-search-mobile-invoker="#headerSearchMobileInvoker"
                    data-search-target="#headerSearch">
                  <!-- Header Search Invoker (Mobile Mode) -->
                  <a id="headerSearchMobileInvoker" class="u-header-search__mobile-invoker align-items-center" href="#">
                     <span class="ti-search"></span>
                  </a>
                  <!-- End Header Search Invoker (Mobile Mode) -->
               </div>
            </div>
            <!-- End Header Search -->

            <!-- Apps -->
            {{-- <div class="u-header-section">
               <div class="u-header-dropdown dropdown pt-1">
                  <a id="appsInvoker" class="u-header-invoker d-flex align-items-center" href="#" role="button" aria-haspopup="true" aria-expanded="false"
                     data-toggle="dropdown"
                     data-offset="20">
                    <span class="position-relative">
                        <span class="ti-layout-grid3 u-header-invoker__icon"></span>
                     </span>
                  </a>

                  <div class="u-header-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="appsInvoker" style="width: 320px;">
                     <div class="card p-0">
                        <div class="card-body p-0">
                           <div class="row no-gutters">
                              <!-- App -->
                              <div class="col-4 p-3">
                                 <a class="d-flex flex-column link-dark" href="#">
                                    <div class="u-icon u-icon-sm rounded-circle bg-danger text-white mx-auto mb-2">
                                       <span class="ti-dribbble"></span>
                                    </div>

                                    <span class="font-weight-semi-bold text-center">Dribble</span>
                                 </a>
                              </div>
                              <!-- End App -->

                              <!-- App -->
                              <div class="col-4 p-3">
                                 <a class="d-flex flex-column link-dark" href="#">
                                    <div class="u-icon u-icon-sm rounded-circle bg-info text-white mx-auto mb-2">
                                       <span class="ti-twitter-alt"></span>
                                    </div>

                                    <span class="font-weight-semi-bold text-center">Twitter</span>
                                 </a>
                              </div>
                              <!-- End App -->

                              <!-- App -->
                              <div class="col-4 p-3">
                                 <a class="d-flex flex-column link-dark" href="#">
                                    <div class="u-icon u-icon-sm rounded-circle bg-success text-white mx-auto mb-2">
                                       <span class="ti-soundcloud"></span>
                                    </div>

                                    <span class="font-weight-semi-bold text-center">Spotify</span>
                                 </a>
                              </div>
                              <!-- End App -->

                              <!-- App -->
                              <div class="col-4 p-3">
                                 <a class="d-flex flex-column link-dark" href="#">
                                    <div class="u-icon u-icon-sm rounded-circle bg-info text-white mx-auto mb-2">
                                       <span class="ti-facebook"></span>
                                    </div>

                                    <span class="font-weight-semi-bold text-center">Facebook</span>
                                 </a>
                              </div>
                              <!-- End App -->

                              <!-- App -->
                              <div class="col-4 p-3">
                                 <a class="d-flex flex-column link-dark" href="#">
                                    <div class="u-icon u-icon-sm rounded-circle bg-secondary text-white mx-auto mb-2">
                                       <span class="ti-pinterest"></span>
                                    </div>

                                    <span class="font-weight-semi-bold text-center">Behance</span>
                                 </a>
                              </div>
                              <!-- End App -->

                              <!-- App -->
                              <div class="col-4 p-3">
                                 <a class="d-flex flex-column link-dark" href="#">
                                    <div class="u-icon u-icon-sm rounded-circle bg-primary text-white mx-auto mb-2">
                                       <span class="ti-skype"></span>
                                    </div>

                                    <span class="font-weight-semi-bold text-center">Skype</span>
                                 </a>
                              </div>
                              <!-- End App -->
                           </div>
                        </div>

                        <hr class="my-0">

                        <div class="card-footer border-0 p-3">
                           <a class="font-weight-semi-bold" href="#">All apps</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div> --}}
            <!-- End Apps -->

            <!-- User Profile -->
            <div class="u-header-section u-header-section--profile">
               <div class="u-header-dropdown dropdown">
                  <a class="link-muted d-flex align-items-center" href="#" role="button" id="userProfileInvoker" aria-haspopup="true" aria-expanded="false"
                     data-toggle="dropdown"
                     data-offset="0">
                     <img class="u-header-avatar img-fluid rounded-circle mr-md-3" src="assets/img-temp/avatars/img1.jpg" alt="User Profile">
                     <span class="text-dark d-none d-md-inline-flex align-items-center">
                        Hallo {{  Auth::user()->name }}
                        <span class="ti-angle-down text-muted ml-4"></span>
                     </span>
                  </a>

                  <div class="u-header-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="userProfileInvoker" style="width: 260px;">
                     <div class="card p-3">
                        <div class="card-header border-0 p-0">
                           <!-- Storage -->
                           <div class="d-flex align-items-center justify-content-between mb-3">
                              <span class="mb-0">Storage</span>

                              <div class="text-muted">
                                 <strong class="text-dark">60gb</strong> / 100gb
                              </div>
                           </div>

                           <div class="progress" style="height: 4px;">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                           <!-- End Storage -->
                        </div>

                        <hr class="my-4">

                        <div class="card-body p-0">
                           <ul class="list-unstyled mb-0">
                              <li class="mb-3">
                                 <a class="link-dark" href="#">View Profile</a>
                              </li>
                              <li class="mb-3">
                                 <a class="link-dark" href="#">Settings</a>
                              </li>
                              <li class="mb-3">
                                 <a class="link-dark" href="#">Invite your friends</a>
                              </li>
                              <li>
                                 {{-- <a class="link-dark" href="{{ route('logout') }}">Sign Out</a> --}}
                                 <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                 </a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     @csrf
                                 </form>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- End User Profile -->
         </div>
         <!-- End Header Middle Section -->
      </header>
      <!-- End Header (Topbar) -->

      <!-- Main -->
      <main class="u-main">
         <!-- Sidebar -->
         @include('layouts.navbar-backend');
         <!-- End Sidebar -->

         <!-- Content -->
         <div class="u-content">
            <!-- Content Body -->
            <div class="u-body">
               <div class="mb-4">
                  <h1 class="h2 mb-2">@yield('sub-title')</h1>
                  @if(session()->get('success'))
                     <div class="alert alert-success">{{ session()->get('success') }}</div>
                  @endif
                  @yield('content')
               </div>
            </div>
            <!-- End Content Body -->

            <!-- Footer -->
            <footer class="u-footer d-md-flex align-items-md-center text-center text-md-left text-muted">
               <!-- Footer Menu -->
               <ul class="list-inline mb-3 mb-md-0">
                  <li class="list-inline-item mr-4">
                     <a class="text-muted" href="https://www.facebook.com/htmlstream" target="_blank">About Htmlstream</a>
                  </li>
                  <li class="list-inline-item">
                     <a class="text-muted" href="https://htmlstream.com/" target="_blank">More Freebies</a>
                  </li>
               </ul>
               <!-- End Footer Menu -->

               <!-- Copyright -->
               <span class="text-muted ml-auto">&copy; 2019 <a class="text-muted" href="https://htmlstream.com/" target="_blank">Htmlstream</a>. All Rights Reserved.</span>
               <!-- End Copyright -->
            </footer>
            <!-- End Footer -->
         </div>
         <!-- End Content -->
      </main>
      <!-- End Main -->

      <!-- Global Vendor -->
      <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/jquery-migrate/jquery-migrate.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
      <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

      <!-- Plugins -->
      <script src="{{ asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>

      <!-- Initialization  -->
      <script src="{{ asset('assets/js/sidebar-nav.js') }}"></script>
      <script src="{{ asset('assets/js/main.js') }}"></script>
      <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
      <script>
         var options = {
             filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
             filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
             filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
             filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
         };
         CKEDITOR.replace('content', options);
      </script>
   </body>
   <!-- End Body -->
</html>