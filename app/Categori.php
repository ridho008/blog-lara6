<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categori extends Model
{
   protected $table = 'categori';
   protected $fillable = ['name', 'slug', 'created_at', 'updated_at'];
}
