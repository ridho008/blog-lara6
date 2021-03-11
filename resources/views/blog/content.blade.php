@extends('theme-blog.content')

@foreach($post as $pos)
@section('title', $pos->title)
@endforeach
@section('content')
@foreach($post as $pos)
<div class="row">
   <div class="col-md-12">
      <!-- PAGE HEADER -->
            <div id="post-header" class="page-header" style="margin-bottom: 10px;">
               <div class="page-header-bg" style="background-image: url('../uploads/posts/{{ $pos->photo }}');background-size: cover;" data-stellar-background-ratio="0.5"></div>
               <div class="container">
                  <div class="row">
                     <div class="col-md-10">
                        <div class="post-category">
                           <a href="{{ route('blog.category', $pos->slug) }}">{{ $pos->categori->name }}</a>
                        </div>
                        <h1>{{ $pos->title }}</h1>
                        <ul class="post-meta">
                           <li><a href="author.html">{{ $pos->users->name }}</a></li>
                           <li>{{ \Carbon\Carbon::parse($pos->created_at)->diffForHumans() }}</li>
                           <li><i class="fa fa-comments"></i> 3</li>
                           <li><i class="fa fa-eye"></i> 807</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /PAGE HEADER -->
         {!! $pos->content !!}
         <!-- post tags -->
         <?php 
         $tags = Illuminate\Support\Facades\DB::table('posts')
            ->join('posts_tags', 'posts.id', '=', 'posts_tags.posts_id')
            ->join('tags', 'tags.id', '=', 'posts_tags.tags_id')
            ->select('*')
            ->where('posts_tags.posts_id', $pos->id)
            ->get();
         ?>
            <div class="section-row">
               <div class="post-tags">
                  <ul>
                     <li>TAGS:</li>
                     @foreach($tags as $tag)
                     <li><a href="{{ route('blog.tags', $tag->slug) }}">{{ $tag->name }}</a></li>
                     @endforeach
                  </ul>
               </div>
            </div>
            <!-- /post tags -->


            <!-- /related post -->
            <?php 
            /* $relatedPosts = Illuminate\Support\Facades\DB::table('categori')
               ->join('posts', 'categori.id', '=', 'posts.categori_id')
               ->where('posts.categori_id', $pos->categori->id)
               ->inRandomOrder()
               ->take(3)
               ->get(); --}}
               dd($relatedPosts); */
               $relatedPosts = App\Posts::where('categori_id', $pos->categori->id)->take(3)->inRandomOrder()->get();

            ?>
            <div>
               <div class="section-title">
                  <h3 class="title">Related Posts</h3>
               </div>
               <div class="row">
                  <!-- post -->
                  @foreach($relatedPosts as $reladPost)
                  <div class="col-md-4">
                     <div class="post post-sm">
                        <a class="post-img" href="{{ route('blog.content', $reladPost->slug) }}"><img src="{{ asset('uploads/posts/' . $reladPost->photo) }}" alt=""></a>
                        <div class="post-body">
                           <div class="post-category">
                              <a href="{{ route('blog.category', $reladPost->slug) }}">{{ $reladPost->name }}</a>
                           </div>
                           <h3 class="post-title title-sm"><a href="{{ route('blog.content', $reladPost->slug) }}">{{ $reladPost->title }}</a></h3>
                           <ul class="post-meta">
                              <li><a href="author.html">{{ substr($reladPost->users->name, 0,5) }}</a></li>
                              <li>{{ \Carbon\Carbon::parse($reladPost->created_at)->diffForHumans() }}</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  @endforeach
                  <!-- /post -->
               </div>
            </div>
            <!-- /related post -->

            <!-- post comments -->
               <div class="section-row">
                  <div class="section-title">
                     <h3 class="title">3 Comments</h3>
                  </div>
                  <div class="post-comments">
                     <!-- comment -->
                     <div class="media">
                        <div class="media-left">
                           <img class="media-object" src="./img/avatar-2.jpg" alt="">
                        </div>
                        <div class="media-body">
                           <div class="media-heading">
                              <h4>John Doe</h4>
                              <span class="time">5 min ago</span>
                           </div>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                           <a href="#" class="reply">Reply</a>
                           <!-- comment -->
                           <div class="media media-author">
                              <div class="media-left">
                                 <img class="media-object" src="./img/avatar-1.jpg" alt="">
                              </div>
                              <div class="media-body">
                                 <div class="media-heading">
                                    <h4>John Doe</h4>
                                    <span class="time">5 min ago</span>
                                 </div>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                 <a href="#" class="reply">Reply</a>
                              </div>
                           </div>
                           <!-- /comment -->
                        </div>
                     </div>
                     <!-- /comment -->

                     <!-- comment -->
                     <div class="media">
                        <div class="media-left">
                           <img class="media-object" src="./img/avatar-3.jpg" alt="">
                        </div>
                        <div class="media-body">
                           <div class="media-heading">
                              <h4>John Doe</h4>
                              <span class="time">5 min ago</span>
                           </div>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                           <a href="#" class="reply">Reply</a>
                        </div>
                     </div>
                     <!-- /comment -->
                  </div>
               </div>
               <!-- /post comments -->

               <!-- post reply -->
               <div class="section-row">
                  <div class="section-title">
                     <h3 class="title">Leave a reply</h3>
                  </div>
                  <form class="post-reply">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <textarea class="input" name="message" placeholder="Message"></textarea>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <input class="input" type="text" name="name" placeholder="Name">
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <input class="input" type="email" name="email" placeholder="Email">
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <input class="input" type="text" name="website" placeholder="Website">
                           </div>
                        </div>
                        <div class="col-md-12">
                           <button class="primary-button">Submit</button>
                        </div>

                     </div>
                  </form>
               </div>
               <!-- /post reply -->
   </div>
</div>
@endforeach
@endsection