<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
   protected $table = 'replies';
   protected $fillable = ['posts_id', 'name', 'email', 'website', 'contents', 'created_at', 'updated_at'];

   
}
