<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


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
            'name' => 'Laptop',
            'slug' => Str::slug('Laptop', '-'),
      ]);

      DB::table('categori')->insert([
            'name' => 'Komputer',
            'slug' => Str::slug('Komputer', '-'),
      ]);

      DB::table('categori')->insert([
            'name' => 'Apple',
            'slug' => Str::slug('Apple', '-'),
      ]);

      DB::table('categori')->insert([
            'name' => 'Window',
            'slug' => Str::slug('Window', '-'),
      ]);

      DB::table('categori')->insert([
            'name' => 'Linux',
            'slug' => Str::slug('Linux', '-'),
      ]);
    }
}
