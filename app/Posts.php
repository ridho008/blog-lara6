<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Posts extends Model
{
   use SoftDeletes;
   protected $fillable = ['title', 'slug', 'categori_id', 'content', 'photo', 'created_at', 'updated_at'];

   public function categori()
   {
      return $this->belongsTo('App\Categori');
   }

   public function tags()
   {
      return $this->belongsToMany('App\Tags');
   }
}
