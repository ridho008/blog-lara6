@extends('layouts.app-backend')

@section('title', 'Settings Blog')
@section('navbar-backend')

@section('sub-title', 'Settings Blog')
@section('content')
<div class="row">
   <div class="col-md-12">
      <p>
        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
          General Setting
        </a>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#media-social" aria-expanded="false" aria-controls="media-social">
          Social Media
        </button>
      </p>
      <div class="collapse" id="collapseExample">
        <div class="card card-body">
         <div class="alert alert-secondary fade show" role="alert">
            <span class="alert-icon ti-hand-point-right mr-3"></span>
            Klik 1x <strong>General Settings</strong> untuk menutup tab.
            <button class="close" type="button" aria-label="Close"
                    data-dismiss="alert">
               <span class="ti-close" aria-hidden="true"></span>
            </button>
         </div>
          <form action="{{ route('setting.update-general', $settings->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
             <div class="form-group">
                <label for="title">Title Website</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ $settings->title }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
             </div>
             <div class="row">
                <div class="col-md-6">
                   <div class="form-group">
                      <label for="logo">Logo</label><br>
                      <img src="{{ asset('uploads/logo/' . $settings->logo) }}" alt="{{ $settings->logo }}" class="img-fluid" width="100">
                      <input type="file" name="logo" id="logo" class="form-control-file" value="">
                      <input type="hidden" name="logoOld" id="logoOld" class="form-control-file" value="{{ $settings->logo }}">
                   </div>
                </div>
                <div class="col-md-6">
                   <div class="form-group">
                      <label for="favicon">Favicon</label><br>
                      <img src="{{ asset('uploads/favicon/' . $settings->favicon) }}" alt="{{ $settings->favicon }}" class="img-fluid" width="100">
                      <input type="file" name="favicon" id="favicon" class="form-control" value="">
                      <input type="hidden" name="faviconOld" id="faviconOld" class="form-control" value="{{ $settings->favicon }}">
                   </div>
                </div>
             </div>
             <div class="form-group">
                <label for="analytics">Google Analytics</label>
                <textarea name="analytics" id="analytics" class="form-control @error('analytics') is-invalid @enderror">{{ $settings->google_analytics }}</textarea>
                @error('analytics')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
             </div>
             <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
             </div>
          </form>
        </div>
      </div>
      <div class="collapse" id="media-social">
        <div class="card card-body">
         <form action="{{ route('setting.social-media', $settings->id) }}" method="post">
            @csrf
            @method('put')
             <div class="row">
                <div class="col-md-6">
                  <p class="text-info">Tab media sosial ini akan terhubung dengan icon media sosial yang berada di halaman utama website.</p>
                   <div class="form-group">
                      <label for="facebook">Facebook</label>
                      <input type="text" name="facebook" id="facebook" class="form-control @error('facebook') is-invalid @enderror" value="{{ $settings->facebook }}">
                      <small class="muted text-primary"><i>https://facebook.com/ridho.ambara</i></small>
                      @error('facebook')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                   </div>
                   <div class="form-group">
                      <label for="twitter">Twitter</label>
                      <input type="text" name="twitter" id="twitter" class="form-control @error('twitter') is-invalid @enderror" value="{{ $settings->twitter }}">
                      <small class="muted text-primary"><i>https://twitter.com/ridho.ambara</i></small>
                      @error('twitter')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                   </div>
                </div>
                <div class="col-md-6">
                   <div class="form-group">
                      <label for="instagram">Instagram</label>
                      <input type="text" name="instagram" id="instagram" class="form-control @error('instagram') is-invalid @enderror" value="{{ $settings->instagram }}">
                      <small class="muted text-primary"><i>https://instagram.com/ridho_ssss</i></small>
                      @error('instagram')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                   </div>
                   <div class="form-group">
                      <button type="submit" class="btn btn-primary">Update</button>
                   </div>
                </div>
             </div>
            </form>
        </div>
      </div>
   </div>
</div>
@endsection