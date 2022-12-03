<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'ibnumahjub',
            'email' => 'mrxnunu@gmail.com',
            'password' => Hash::make('030602'),
        ]);
        User::create([
            'username' => 'trisa',
            'email' => 'trisa@gmail.com',
            'password' => Hash::make('123123'),
        ]);
    }
}