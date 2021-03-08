@extends('layouts.app-backend')

@section('title', 'Edit New Tag')
@section('navbar-backend')

@section('sub-title', 'Edit New Tag')
@section('content')
<div class="card mb-5">
  <!-- Crad Body -->
  <div class="card-body">
    <form action="{{ route('tag.update', $tag->id) }}" method="post">
      @csrf
      @method('put')
      <div class="form-group">
        <label for="name">Name Tag</label>
        <input id="name" name="name" value="{{ old('name') ? old('name') : $tag->name }}" class="form-control form-pill @error('name') is-invalid @enderror" type="text" placeholder="Name Tag">
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