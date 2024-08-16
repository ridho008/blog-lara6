<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        DB::table('settings')->insert([
            'title' => 'My Blog Laravel 6',
            'logo' => 'logo.jpg',
            'favicon' => 'favicon.jpg',
            'google_analytics' => 'null', 
            'facebook' => 'www.facebook.com', 
            'twitter' => 'www.x.com',
            'instagram' => 'www.instagram.com',
            'email' => 'ridhosurya000@gmail.com',
            'telp' => $faker->numerify('##########'),
            'alamat' => 'Jl.Pepaya',
            'maps' => 'setting dulu',
            'about'=> 'Blog My Blog',
            'meta_description' => 'own edit',
            'meta_keyword' => 'own edit',
        ]);
    }
}
