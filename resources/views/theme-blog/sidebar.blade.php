<div class="col-md-4">
               <!-- ad widget-->
               <div class="aside-widget text-center">
                  <a href="#" style="display: inline-block;margin: auto;">
                     <img class="img-responsive" src="./img/ad-3.jpg" alt="">
                  </a>
               </div>
               <!-- /ad widget -->

               <!-- social widget -->
               <div class="aside-widget">
                  <div class="section-title">
                     <h2 class="title">Social Media</h2>
                  </div>
                  <div class="social-widget">
                     <ul>
                        <li>
                           <a href="#" class="social-facebook">
                              <i class="fa fa-facebook"></i>
                              <span>21.2K<br>Followers</span>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="social-twitter">
                              <i class="fa fa-twitter"></i>
                              <span>10.2K<br>Followers</span>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="social-google-plus">
                              <i class="fa fa-google-plus"></i>
                              <span>5K<br>Followers</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <!-- /social widget -->

               <!-- category widget -->
               <div class="aside-widget">
                  <div class="section-title">
                     <h2 class="title">Categories</h2>
                  </div>
                  <div class="category-widget">
                     <ul>
                        @foreach($categori as $category)
                        <li><a href="{{ route('blog.category', $category->slug) }}">{{ $category->name }}<span>{{ $category->posts->count() }}</span></a></li>
                        @endforeach
                     </ul>
                  </div>
               </div>
               <!-- /category widget -->

               <!-- archive widget -->
               <?php
               $archives = DB::table('posts')
                   ->distinct()
                   ->orderBy('updated_at')
                   ->get([
                       DB::raw('YEAR(`updated_at`) AS `year`'),
                       DB::raw('MONTH(`updated_at`) AS `month`'),
                   ]);
               $archivesCount = DB::table('posts')
                   ->distinct()
                   ->orderBy('updated_at')
                   ->count();
               ?>
               <div class="aside-widget">
                  <div class="section-title">
                     <h2 class="title">Archives</h2>
                  </div>
                  <div class="category-widget">
                     <ul>
                        @foreach($archives as $archive)
                        <li><a href="">{{ $archive->month. ' '. $archive->year }}<span>{{ $archivesCount }}</span></a></li>
                        @endforeach
                     </ul>
                  </div>
               </div>
               <!-- /archive widget -->

               <!-- newsletter widget -->
               {{-- <div class="aside-widget">
                  <div class="section-title">
                     <h2 class="title">Newsletter</h2>
                  </div>
                  <div class="newsletter-widget">
                     <form>
                        <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
                        <input class="input" name="newsletter" placeholder="Enter Your Email">
                        <button class="primary-button">Subscribe</button>
                     </form>
                  </div>
               </div> --}}
               <!-- /newsletter widget -->

               <!-- post widget -->
               <?php
               $popularPosts = App\Posts::inRandomOrder()
                ->take(4)
                ->get();
               ?>
               <div class="aside-widget">
                  <div class="section-title">
                     <h2 class="title">Popular Posts</h2>
                  </div>
                  <!-- post -->
                  @foreach($popularPosts as $popularPost)
                  <div class="post post-widget">
                     <a class="post-img" href="{{ route('blog.content', $popularPost->slug) }}"><img src="{{ asset('uploads/posts/' . $popularPost->photo) }}" alt=""></a>
                     <div class="post-body">
                        <div class="post-category">
                           <a href="{{ route('blog.category', $popularPost->slug) }}">{{ $popularPost->categori->name }}</a>
                        </div>
                        <h3 class="post-title"><a href="{{ route('blog.content', $popularPost->slug) }}">{{ $popularPost->title }}</a></h3>
                     </div>
                  </div>
                  @endforeach
                  <!-- /post -->
               </div>
               <!-- /post widget -->
            </div>