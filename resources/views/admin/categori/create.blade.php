@extends('layouts.app')

@section('title', 'Add New Category')
@section('navbar-backend')

@section('sub-title', 'Add New Category')
@section('content')
<div class="card mb-5">
  <!-- Crad Body -->
  <div class="card-body">
    <form action="{{ route('categori.store') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="name">Name Category</label>
        <input id="name" name="name" class="form-control form-pill @error('name') is-invalid @enderror" type="text" placeholder="Name Category">
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