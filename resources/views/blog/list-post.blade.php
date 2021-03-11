@extends('theme-blog.content')
{{-- {{ dd(Request::path()) }} --}}

@if(Request::path() == 'list-posts')
@section('title', 'List Post')
@else
@section('title', 'Category ' . $title->name)
@endif
@section('content')
<!-- PAGE HEADER -->
<div class="page-header" style="margin-bottom: 20px;">
   <div class="page-header-bg" style="background-image: url('../uploads/list-post/list-post.jpg');" data-stellar-background-ratio="0.5"></div>
   <div class="container">
      <div class="row">
         <div class="col-md-10 text-center">
            <h1 class="text-uppercase">
               @if(Request::path() == 'list-posts')
               List Post
               @else
               {{ 'Category ' . $title->name}}
               @endif
            </h1>
         </div>
      </div>
   </div>
</div>
<!-- /PAGE HEADER -->

<!-- post -->
@foreach($data as $post)
<div class="post post-row">
   <a class="post-img" href="{{ route('blog.content', $post->slug) }}"><img src="{{ asset('uploads/posts/'. $post->photo) }}" alt="{{ $post->title }}" alt="{{ $post->title }}"></a>
   <div class="post-body">
      <div class="post-category">
         <a href="{{ route('blog.category', $post->slug) }}">{{ $post->categori->name }}</a>
      </div>
      <h3 class="post-title"><a href="{{ route('blog.content', $post->slug) }}">{{ $post->title }}</a></h3>
      <ul class="post-meta">
         <li><a href="author.html">{{ substr($post->users->name, 0,5) }}</a></li>
         <li>{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</li>
      </ul>
      <p>{{ substr($post->content, 0,50) }}...</p>
   </div>
</div>
@endforeach
{{ $data->links() }}
<!-- /post -->
@endsection