<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Posts extends Model
{
   protected $fillable = ['title', 'slug', 'categori_id', 'content', 'photo', 'created_at', 'updated_at'];
   public function categori()
   {
      return $this->belongsTo('App\Categori');
   }
}
