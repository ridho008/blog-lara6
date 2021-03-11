<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Posts extends Model
{
   use SoftDeletes;
   protected $fillable = ['title', 'slug', 'categori_id', 'users_id', 'content', 'photo', 'created_at', 'updated_at'];

   public function categori()
   {
      // 1 post hanya bisa miliki 1 categori
      return $this->belongsTo('App\Categori');
   }

   public function tags()
   {
      return $this->belongsToMany('App\Tags');
   }

   public function users()
   {
      return $this->belongsTo('App\User');
   }

   // public function reply()
   // {
   //    return $this->belongsTo('App\Reply');
   // }
}
