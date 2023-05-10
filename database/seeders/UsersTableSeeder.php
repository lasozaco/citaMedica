<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Sophia ' ,
            'email' => 'lasozaco2000@hotmail.com ' ,
            'email_verified_at' => now(),
            'password' => bcrypt('sophia04'), // password
            'cedula' => '1107975224',
            'address' =>'Calle 37 a #6-55 Villa teresa',
            'phone' =>'3188160557',
            'role' =>'admin',
            ]);

        User::factory()
            ->count(50)
            ->create();
    }
}
