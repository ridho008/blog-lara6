@extends('theme-blog.content')

@foreach($post as $pos)
@section('title', $pos->title)
@endforeach
@section('content')
@foreach($post as $pos)
<?php 
$commentsCount = App\Reply::where('posts_id', $pos->id)->count();
?>
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
                           <li><i class="fa fa-comments"></i> {{ $commentsCount }}</li>
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
            <?php
            $comments = App\Reply::where('posts_id', $pos->id)->get();
            ?>
               <div class="section-row">
                  <div class="section-title">
                     <h3 class="title">{{ $commentsCount }} Comments</h3>
                  </div>
                  <div class="post-comments">
                     <!-- comment -->
                     @foreach($comments as $comment)
                     <div class="media">
                        <div class="media-left">
                           <img class="media-object" src="{{ asset('uploads/comments/avatar.jpg') }}" alt="">
                        </div>
                        <div class="media-body">
                           <div class="media-heading">
                              <h4>{{ $comment->name }}</h4>
                              <span class="time">{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</span>
                           </div>
                           <p>{{ $comment->contents }}</p>
                        </div>
                     </div>
                     @endforeach
                     <!-- /comment -->
                  </div>
               </div>
               <!-- /post comments -->

               <!-- post reply -->
               <div class="section-row">
                  <div class="section-title">
                     <h3 class="title">Leave a reply</h3>
                  </div>
                  @if(session()->get('success'))
                     <div class="alert alert-success">{{ session()->get('success') }}</div>
                  @endif
                  <form class="post-reply" method="post" action="{{ route('reply.massage') }}">
                     @csrf
                     <input type="hidden" name="posts_id" value="{{ $pos->id }}">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <textarea class="input @error('contents') is-invalid @enderror" name="contents" placeholder="Message">{{ old('contents') }}</textarea>
                              @error('contents')
                                  <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <input class="input @error('name') is-invalid @enderror" type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                              @error('name')
                                  <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <input class="input @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                              @error('email')
                                  <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <input class="input @error('website') is-invalid @enderror" type="text" name="website" placeholder="Website" value="{{ old('website') }}">
                              @error('website')
                                  <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                           </div>
                        </div>
                        <div class="col-md-12">
                           <button type="submit" class="primary-button">Submit</button>
                        </div>

                     </div>
                  </form>
               </div>
               <!-- /post reply -->
   </div>
</div>
@endforeach
@endsection