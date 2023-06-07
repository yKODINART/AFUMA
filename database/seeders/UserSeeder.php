<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        $user = User::create([
            'name' => 'DOGBEVI',
            'token' => getRamdomText(10),
            'phone_number' => '96608457',
            'email' => 'roven@gmail.com',
            'type_user' => 1,
            'status' => 2,
            'role' => 'user',
            'password' => bcrypt('ginoven93'),
        ]);
        $user->assignRole('user');
        return $user;
       
    }
}
