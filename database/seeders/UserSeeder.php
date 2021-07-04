<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Muhamad Indra Setiawan',
            'username' => 'admin',
            'level' => 'admin',
            'email' => 'dishub@gmail.com',
            'password' => bcrypt('password'),
            'remember_token' => Str::random(60),
        ]);
    }
}
