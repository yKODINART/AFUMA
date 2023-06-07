<?php

namespace Database\Seeders;

use App\Models\Admins;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
            'name' => 'TOKPON',
            'token' => getRamdomText(10),
            'phone_number' => '96608457',
            'email' => 'tokpon@gmail.com',
            'type_user' => 2,
            'status' => 2,
            'role' => 'admin',
            'password' => bcrypt('ginoven93'),
            
        ])->assignRole('admin');

        User::create([
            'name' => 'YEMBIT',
            'token' => getRamdomText(10),
            'phone_number' => '96608457',
            'email' => 'gillesrenaud@gmail.com',
            'type_user' => 2,
            'status' => 2,
            'role' => 'superadmin',
            'password' => bcrypt('ginoven93'),
            
        ])->assignRole('superadmin');
    }
}
