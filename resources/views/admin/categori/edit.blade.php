@extends('layouts.app')

@section('title', 'Edit Category')
@section('navbar-backend')

@section('sub-title', 'EditCategory')
@section('content')
<div class="card mb-5">
  <!-- Crad Body -->
  <div class="card-body">
    <form action="{{ route('categori.update', $category->id) }}" method="post">
      @csrf
      @method('put')
      <div class="form-group">
        <label for="name">Name Category</label>
        <input id="name" name="name" value="{{ old('name') ? old('name') : $category->name }}" class="form-control form-pill @error('name') is-invalid @enderror" type="text" placeholder="Name Category">
        @error('name')
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