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
      
   </div>
</div>
@endforeach
@endsection