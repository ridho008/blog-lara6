<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categori extends Model
{
   protected $table = 'categori';
   protected $fillable = ['name', 'slug'];

   public function posts()
   {
      return $this->hasMany('App\Posts', 'categori_id', 'id');
   }

   // public function posts()
   //  {
   //      return $this->belongsToMany('Posts', 'categori_id', 'id');
   //  }

   public function getRouteKeyName()
   {
      return 'slug';
   }
}
