<?php

use Illuminate\Database\Seeder;

class CategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categori')->insert([
            'name' => Str::random(10),
            'slug' => Str::slug('whatasdjahskd asdkjhaklsd uiqyweuqwe', '-'),
      ]);
    }
}
