@extends('layouts.app')

@section('title', 'Edit New Post')
@section('navbar-backend')

@section('sub-title', 'Edit New Post')
@section('content')
<div class="card mb-5">
  <!-- Crad Body -->
  <div class="card-body">
    <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
      <input type="hidden" name="photoOld" value="{{ $post->photo }}">
      @csrf
      @method('put')
      <div class="form-group">
        <label for="title">Title</label>
        <input id="title" name="title" class="form-control form-pill @error('title') is-invalid @enderror" type="text" value="{{ old('title') ? old('title') : $post->title }}" placeholder="Name Category">
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="tags">Tags</label>
        <select name="tags[]" id="tags" multiple="" class="form-control">
          @foreach($tags as $tag)
             <option value="{{ $tag->id }}"
              @foreach($post->tags as $value)
              @if($tag->id == $value->id)
              selected="" 
              @endif
              @endforeach
              >{{ $tag->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="categori_id">Category</label>
        <select name="categori_id" id="categori_id" class="form-control">
          <option value="">Choose Category</option>
          @foreach($category as $categori)
          @if($categori->id == $post->categori_id)
            <option value="{{ $categori->id }}" selected="">{{ $categori->name }}</option>
            @else
            <option value="{{ $categori->id }}">{{ $categori->name }}</option>
            @endif
          @endforeach
        </select>
        @error('categori_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" id="content" class="form-control" placeholder="Content..">{{ $post->content }}</textarea>
        @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="photo">Photo</label><br>
        <img src="{{ asset('uploads/posts/' . $post->photo) }}" alt="{{ $post->title }}" class="img-fluid" style="width: 100px;">
        <input id="photo" type="file" name="photo" class="form-control form-pill @error('photo') is-invalid @enderror">
        @error('photo')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-sm">Update</button>
      </div>
    </form>
  </div>
  <!-- Crad Body -->
</div>



@endsection