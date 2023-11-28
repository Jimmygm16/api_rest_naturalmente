<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::unguard();
        User::create([
            'name' => 'Juan',
            'email' => 'juan@gmail.com',
            'password' => '12345678',
            'phone_number' => '12345678',
            'address' => 'cra 9 # 9-09',
            'user_type' => 'admin',
            'user_status' => 'active',
            'birthday' => '1999-09-09',

        ]);
        User::create([
            'name' => 'Maria',
            'email' => 'maria@gmail.com',
            'password' => 'password123',
            'phone_number' => '12345678',
            'address' => 'cra 9 # 9-09',
            'user_type' => 'customer',
            'user_status' => 'active',
            'birthday' => '2001-10-09',
        ]);

        User::create([
            'name' => 'Pedro',
            'email' => 'pedro@gmail.com',
            'password' => 'password123',
            'phone_number' => '12345678',
            'address' => 'cra 9 # 9-09',
            'user_type' => 'customer',
            'user_status' => 'active',
            'birthday' => '2001-11-09',
        ]);

        User::create([
            'name' => 'Ana',
            'email' => 'ana@gmail.com',
            'password' => 'password123',
            'phone_number' => '12345678',
            'address' => 'cra 9 # 9-09',
            'user_type' => 'customer',
            'user_status' => 'active',
            'birthday' => '2001-12-09',
        ]);
        User::reguard();
    }
}
