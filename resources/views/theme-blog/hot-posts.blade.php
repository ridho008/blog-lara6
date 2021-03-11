<?php
use App\Posts;
$hotPostsRight = Posts::inRandomOrder()
                ->take(2)
                ->get();

$hotPostsLeft = Posts::inRandomOrder()
                ->take(1)
                ->get();                
?>
<div class="section">
      <!-- container -->
      <div class="container">
         <!-- row -->
         <div id="hot-post" class="row hot-post">
            <div class="col-md-8 hot-post-left">
               <!-- post -->
               @foreach($hotPostsLeft as $hotPLeft)
               <div class="post post-thumb">
                  <a class="post-img" href="{{ route('blog.content', $hotPLeft->slug) }}"><img src="{{ asset('uploads/posts/' . $hotPLeft->photo) }}" alt=""></a>
                  <div class="post-body">
                     <div class="post-category">
                        <a href="{{ route('blog.category', $hotPLeft->slug) }}">{{ $hotPLeft->categori->name }}</a>
                     </div>
                     <h3 class="post-title title-lg"><a href="{{ route('blog.content', $hotPLeft->slug) }}">{{ $hotPLeft->title }}</a></h3>
                     <ul class="post-meta">
                        <li><a href="author.html">{{ substr($hotPLeft->users->name, 0,5) }}</a></li>
                        <li>{{ \Carbon\Carbon::parse($hotPLeft->created_at)->diffForHumans() }}</li>
                     </ul>
                  </div>
               </div>
               @endforeach
               <!-- /post -->
            </div>
            <div class="col-md-4 hot-post-right">
               <!-- post -->
               @foreach($hotPostsRight as $hotPRight)
               <div class="post post-thumb">
                  <a class="post-img" href="{{ route('blog.content', $hotPRight->slug) }}"><img src="{{ asset('uploads/posts/' . $hotPRight->photo) }}" alt=""></a>
                  <div class="post-body">
                     <div class="post-category">
                        <a href="{{ route('blog.category', $hotPRight->slug) }}">{{ $hotPRight->categori->name }}</a>
                     </div>
                     <h3 class="post-title"><a href="{{ route('blog.content', $hotPRight->slug) }}">{{ $hotPRight->title }}</a></h3>
                     <ul class="post-meta">
                        <li><a href="author.html">{{ substr($hotPRight->users->name, 0,5) }}</a></li>
                        <li>{{ \Carbon\Carbon::parse($hotPRight->created_at)->diffForHumans() }}</li>
                     </ul>
                  </div>
               </div>
               @endforeach
               <!-- /post -->
            </div>
         </div>
         <!-- /row -->
      </div>
      <!-- /container -->
   </div>