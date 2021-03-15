@extends('layouts.app-backend')

@section('title', 'Settings Blog')
@section('navbar-backend')

@section('sub-title', 'Settings Blog')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="alert alert-primary fade show" role="alert">
       <span class="alert-icon ti-hand-point-right mr-3"></span>
       Klik menu untuk membuka halaman settingnya.
    </div>
  </div>
</div>
<div class="row">
   <div class="col-md-12">
      <p>
        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
          General Setting
        </a>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#media-social" aria-expanded="false" aria-controls="media-social">
          Social Media
        </button>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#contact-us" aria-expanded="false" aria-controls="contact-us">
          Contact Us
        </button>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#about-us" aria-expanded="false" aria-controls="about-us">
          About Us
        </button>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#meta-data" aria-expanded="false" aria-controls="meta-data">
          Meta Data
        </button>
      </p>
      <div class="collapse" id="collapseExample">
        <div class="card card-body">
         <div class="alert alert-secondary fade show" role="alert">
            <span class="alert-icon ti-hand-point-right mr-3"></span>
            Klik 1x <strong>General Settings</strong> untuk menutup tab.
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
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-info-soft fade show" role="alert">
                <span class="alert-icon ti-info-alt mr-3"></span>
                Tab media sosial ini akan terhubung dengan icon media sosial yang berada di halaman utama website.
              </div>
            </div>
          </div>
         <form action="{{ route('setting.social-media', $settings->id) }}" method="post">
            @csrf
            @method('put')
             <div class="row">
                <div class="col-md-6">
                  <p class="text-info"></p>
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
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                       <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </div>
                </div>
             </div>
            </form>
        </div>
      </div>
      <div class="collapse" id="contact-us">
        <div class="card card-body">
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-info-soft fade show" role="alert">
                <span class="alert-icon ti-info-alt mr-3"></span>
                Contact Us ini akan muncul di bagian footer website.
              </div>
            </div>
          </div>
         <form action="{{ route('setting.contact-us', $settings->id) }}" method="post">
            @csrf
            @method('put')
             <div class="row">
                <div class="col-md-6">
                  <p class="text-info"></p>
                   <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ $settings->email }}">
                      @error('email')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                   </div>
                   <div class="form-group">
                      <label for="telp">Telp</label>
                      <input type="number" name="telp" id="telp" class="form-control @error('telp') is-invalid @enderror" value="{{ $settings->telp }}">
                      @error('telp')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                   </div>
                </div>
                <div class="col-md-6">
                   <div class="form-group">
                      <label for="alamat">Address</label>
                      <input type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ $settings->alamat }}">
                      @error('alamat')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                   </div>
                   <div class="form-group">
                      <label for="maps">Google Maps</label>
                      <textarea name="maps" id="maps" class="form-control">{{ $settings->maps }}</textarea>
                      <small class="muted text-danger"><i>pastikan script google maps (embed datanya dari google maps)</i></small>
                      @error('maps')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                   </div>
                </div>
             </div>
             <div class="row">
               <div class="col">
                 <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                 </div>
               </div>
             </div>
            </form>
        </div>
      </div>
      <div class="collapse" id="about-us">
        <div class="card card-body">
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-info-soft fade show" role="alert">
                <span class="alert-icon ti-info-alt mr-3"></span>
                Pengaturan data yang ditampilkan pada menu about us.
              </div>
            </div>
          </div>
         <form action="{{ route('setting.about-us', $settings->id) }}" method="post">
            @csrf
            @method('put')
             <div class="row">
               <div class="col-md-12">
                 <div class="form-group">
                    <label for="about">About Us</label>
                    <textarea name="about" id="content" class="form-control">{{ $settings->about }}</textarea>
                    @error('about')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col">
                 <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                 </div>
               </div>
             </div>
            </form>
        </div>
      </div>
      <div class="collapse" id="meta-data">
        <div class="card card-body">
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-info-soft fade show" role="alert">
                <span class="alert-icon ti-info-alt mr-3"></span>
                Pengaturan meta untuk indexing pada google.
              </div>
            </div>
          </div>
         <form action="{{ route('setting.meta-data', $settings->id) }}" method="post">
            @csrf
            @method('put')
             <div class="row">
               <div class="col-md-6">
                 <div class="form-group">
                    <label for="meta_desc">Meta Description</label>
                    <input type="text" name="meta_desc" id="meta_desc" class="form-control @error('meta_desc') is-invalid @enderror" value="{{ $settings->meta_description }}" value="{{ $settings->meta_description }}">
                    @error('meta_desc')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="form-group">
                    <label for="meta_keyword">Meta Keyword</label>
                    <input type="text" name="meta_keyword" id="meta_keyword" class="form-control @error('meta_keyword') is-invalid @enderror" value="{{ $settings->meta_keyword }}" value="{{ $settings->meta_keyword }}">
                    @error('meta_keyword')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col">
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