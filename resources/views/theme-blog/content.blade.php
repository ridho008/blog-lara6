
@include('theme-blog.head')
<?php
use App\Categori;

$categori = Categori::all();
?>
   <!-- SECTION -->
   {{-- Hot Posts --}}
   {{-- {{ dd(Request::path()) }}  --}}
   @if(Request::path() == '/')
   @include('theme-blog.hot-posts')
   @endif
   <!-- /SECTION -->

   <!-- SECTION -->
   <div class="section">
      <!-- container -->
      <div class="container">
         <!-- row -->
         <div class="row">
            <div class="col-md-8">
               <!-- row -->
               {{-- Content --}}
               @yield('content')
               <!-- /row -->

            </div>
            {{-- Sidebar --}}
            @include('theme-blog.sidebar')
         </div>
         <!-- /row -->
      </div>
      <!-- /container -->
   </div>
   <!-- /SECTION -->

{{-- Footer --}}
@include('theme-blog.footer')