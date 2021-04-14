<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Akramul haque Rony',
            'email' => 'rony@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
    }
}
