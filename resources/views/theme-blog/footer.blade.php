   <!-- FOOTER -->
   <footer id="footer">
      <!-- container -->
      <div class="container">
         <!-- row -->
         <div class="row">
            <div class="col-md-3">
               <div class="footer-widget">
                  <div class="footer-logo">
                     <a href="index.html" class="logo"><img src="{{ asset('uploads/logo/'.$setting->logo) }}" alt=""></a>
                  </div>
                  <p>{!! substr($setting->about, 0, 50) !!}</p>
                  <ul class="contact-social">
                     <li><a href="{{ $setting->facebook }}" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="{{ $setting->twitter }}" class="social-twitter"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="{{ $setting->instagram }}" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
                  </ul>
               </div>
            </div>
            <div class="col-md-3">
               <div class="footer-widget">
                  <h3 class="footer-title">Categories</h3>
                  <div class="category-widget">
                     <ul>
                        @foreach($categori as $category)
                        <li><a href="{{ route('blog.category', $category->slug) }}">{{ $category->name }}<span>{{ $category->posts->count() }}</span></a></li>
                        @endforeach
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="footer-widget">
                  <h3 class="footer-title">Tags</h3>
                  <div class="tags-widget">
                     <ul>
                        @foreach($tags as $tag)
                        <li><a href="{{ route('blog.tags', $tag->slug) }}">{{ $tag->name }}</a></li>
                        @endforeach
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="footer-widget">
                  <h3 class="footer-title">Contact Us</h3>
                  <div class="tags-widget">
                     <ul>
                        <li>{{ $setting->email }}</li>
                        <li>{{ floatval($setting->telp) }}</li>
                        <li>{{ $setting->alamat }}</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- /row -->

         <!-- row -->
         <div class="footer-bottom row">
            <div class="col-md-6 col-md-push-6">
               <ul class="footer-nav">
                  <li><a href="{{ url('/') }}">Home</a></li>
                  <li><a href="{{ route('blog.about') }}">About Us</a></li>
                  {{-- <li><a href="contact.html">Contacts</a></li> --}}
                  {{-- <li><a href="#">Advertise</a></li>
                  <li><a href="#">Privacy</a></li> --}}
               </ul>
            </div>
            <div class="col-md-6 col-md-pull-6">
               <div class="footer-copyright">
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>.Downloaded from <a href="https://themeslab.org/" target="_blank">Themeslab</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
               </div>
            </div>
         </div>
         <!-- /row -->
      </div>
      <!-- /container -->
   </footer>
   <!-- /FOOTER -->

   <!-- jQuery Plugins -->
   <script src="{{ asset('fronend/js/jquery.min.js') }}"></script>
   <script src="{{ asset('fronend/js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('fronend/js/jquery.stellar.min.js') }}"></script>
   <script src="{{ asset('fronend/js/main.js') }}"></script>
</body>

</html>