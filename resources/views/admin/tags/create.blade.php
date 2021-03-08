@extends('layouts.app-backend')

@section('title', 'Add New Tag')
@section('navbar-backend')

@section('sub-title', 'Add New Tag')
@section('content')
<div class="card mb-5">
  <!-- Crad Body -->
  <div class="card-body">
    <form action="{{ route('tag.store') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="name">Name Tag</label>
        <input id="name" name="name" class="form-control form-pill @error('name') is-invalid @enderror" type="text" placeholder="Name Tag">
        @error('name')
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