@extends('theme-blog.content')
{{-- {{ dd(Request::path()) }} --}}

@section('title', 'About Us ')
@section('content')
<div class="row">
   <div class="col-md-12">
      {!! $setting->about !!}
   </div>
</div>
@endsection