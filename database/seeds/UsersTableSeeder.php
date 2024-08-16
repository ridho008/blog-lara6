<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // admin
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => null,
            'password' => Hash::make('admin'),
            'remember_token' => null,
            'role' => 0,
      ]);

    //   guest
      DB::table('users')->insert([
            'name' => 'hasan',
            'email' => 'hasan@gmail.com',
            'email_verified_at' => null,
            'password' => Hash::make('hasan'),
            'remember_token' => null,
            'role' => 1,
      ]);

      DB::table('users')->insert([
            'name' => 'harun',
            'email' => 'harun@gmail.com',
            'email_verified_at' => null,
            'password' => Hash::make('harun'),
            'remember_token' => null,
            'role' => 1,
      ]);
    }
}
