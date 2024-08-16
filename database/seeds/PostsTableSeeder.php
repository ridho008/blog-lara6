<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // App\Posts::factory(10)->create();
        factory(App\Posts::class, 10)->create();
    }
}
