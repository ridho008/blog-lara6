@extends('layouts.app-backend')

@section('title', 'Add New User')
@section('navbar-backend')

@section('sub-title', 'Add New User')
@section('content')
<div class="alert alert-secondary-soft fade show" role="alert">
  <span class="alert-icon ti-bell mr-3"></span>
  Jika, kamu tidak mengisi password. secara otomatis password adalah <strong>1234</strong>.
</div>
<div class="card mb-5">
  <!-- Crad Body -->
  <div class="card-body">
    <form action="{{ route('user.store') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="name">Name</label>
        <input id="name" name="name" class="form-control form-pill @error('name') is-invalid @enderror" value="{{ old('name') }}" type="text" placeholder="Name">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input id="email" name="email" value="{{ old('email') }}" class="form-control form-pill @error('email') is-invalid @enderror" type="email" placeholder="Email Address">
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="password">New Password</label>
        <input id="password" name="password" class="form-control form-pill @error('password') is-invalid @enderror" type="password" placeholder="Password">
        @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="password_confirmation">Repeat Password</label>
        <input id="password_confirmation" name="password_confirmation" class="form-control form-pill" type="password" placeholder="Repeat Password Address">
      </div>
      <div class="form-group">
        <label for="role">Role</label>
        <select name="role" id="role" class="form-control @error('role') is-invalid @enderror">
          <option value="">--Choose Role--</option>
          <option value="0">Admin</option>
          <option value="1">Author</option>
        </select>
        @error('role')
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