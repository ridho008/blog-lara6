<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
   protected $table = 'tags';
   protected $fillable = ['name', 'slug', 'created_at', 'updated_at'];

   public function posts()
   {
      return $this->belongsToMany('App\Posts');
   }
}
