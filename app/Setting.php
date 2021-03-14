<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
   protected $table = 'settings';
   protected $fillable = ['title', 'logo', 'favicon', 'google_analytics', 'facebook', 'twitter', 'instagram', 'email', 'telp', 'alamat', 'maps', 'about', 'meta_description', 'meta_keyword', 'created_at', 'updated_at'];
}
