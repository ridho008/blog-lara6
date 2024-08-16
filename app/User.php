<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts()
   {
      return $this->hasMany('App\User', 'user_id', 'id');
   }
}

// <div class="col-md-4 hot-post-right">
//                 <!-- post -->
//                 @foreach ($hotPostsRight as $hotPRight)
//                     {{-- {{ dd($hotPostsRight) }} --}}
//                     <div class="post post-thumb">
//                         <a class="post-img" href="{{ route('blog.content', $hotPRight->slug) }}"><img
//                                 src="{{ asset('uploads/posts/' . $hotPRight->photo) }}" alt=""></a>
//                         <div class="post-body">
//                             <div class="post-category">
//                                 {{-- <a
//                                     href="{{ route('blog.category', $hotPRight->slug) }}">{{ $hotPRight->categori->name }}</a> --}}
//                             </div>
//                             <h3 class="post-title"><a
//                                     href="{{ route('blog.content', $hotPRight->slug) }}">{{ $hotPRight->title }}</a>
//                             </h3>
//                             <ul class="post-meta">
//                                 {{-- <li><a href="author.html">{{ substr($hotPRight->users->name, 0,5) }}</a></li> --}}
//                                 <li>{{ \Carbon\Carbon::parse($hotPRight->created_at)->diffForHumans() }}</li>
//                             </ul>
//                         </div>
//                     </div>
//                 @endforeach
//                 <!-- /post -->
//             </div>