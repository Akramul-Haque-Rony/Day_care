<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Akramul haque Rony',
            'email' => 'Manager@gmail.com',
            'password' => Hash::make('123456789'),
            'role' => 'manager',
        ]);
    }
}
