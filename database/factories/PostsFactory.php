<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Posts;
// use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Posts::class, function (Faker $faker) {
        $title = $faker->sentence;
        $slug = Str::slug($title, '-');
    return 
        [
            'title' => $title,
            'slug' => $slug,
            'categori_id' => $faker->numberBetween(1,5),
            'users_id' => $faker->numberBetween(2,3),
            'content' =>$faker->word(),
            'photo' => '1615278658mouse.jpg',
        ]
    ;
});
