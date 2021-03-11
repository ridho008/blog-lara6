@extends('theme-blog.content')
@section('title', 'Blog Laravel 6')
@section('content')
<div class="row">
   <div class="col-md-12">
      <div class="section-title">
         <h2 class="title">Recent posts</h2>
      </div>
   </div>
   <!-- post -->
   @foreach($data as $posts)
   <div class="col-md-6">
      <div class="post">
         <a class="post-img" href="{{ route('blog.content', $posts->slug) }}"><img src="{{ asset('uploads/posts/'. $posts->photo) }}" alt="{{ $posts->title }}" height="200px"></a>
         <div class="post-body">
            <div class="post-category">
               <a href="{{ route('blog.category', $posts->slug) }}">{{ $posts->categori->name }}</a>
            </div>
            <h3 class="post-title"><a href="{{ route('blog.content', $posts->slug) }}">{{ $posts->title }}</a></h3>
            <ul class="post-meta">
               <li><a href="author.html">{{ substr($posts->users->name, 0,5) }}</a></li>
               <li>{{ \Carbon\Carbon::parse($posts->created_at)->diffForHumans() }}</li>
            </ul>
         </div>
      </div>
   </div>
   @endforeach
   <!-- /post -->

   {{-- <div class="clearfix visible-md visible-lg"></div> --}}
</div>
@endsection