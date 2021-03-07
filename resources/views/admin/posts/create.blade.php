@extends('layouts.app')

@section('title', 'Add New Post')
@section('navbar-backend')

@section('sub-title', 'Add New Post')
@section('content')
<div class="card mb-5">
  <!-- Crad Body -->
  <div class="card-body">
    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="title">Title</label>
        <input id="title" name="title" class="form-control form-pill @error('title') is-invalid @enderror" type="text" placeholder="Name Category">
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="categori_id">Category</label>
        <select name="categori_id" id="categori_id" class="form-control">
          <option value="">Choose Category</option>
          @foreach($category as $categori)
            <option value="{{ $categori->id }}">{{ $categori->name }}</option>
          @endforeach
        </select>
        @error('categori_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" id="content" class="form-control" placeholder="Content.."></textarea>
        @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="photo">Photo</label>
        <input id="photo" type="file" name="photo" class="form-control form-pill @error('photo') is-invalid @enderror">
        @error('photo')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-sm">Add</button>
      </div>
    </form>
  </div>
  <!-- Crad Body -->
</div>



@endsection