<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{

    public function run()
    {
        $user = User::create([
            'name' => 'Вова',
            'email' => 'Vova',
            'phone' => '+79374857122',
            'password' => bcrypt('888888888'),
            'role' => User::ROLE_VOLUNTEER
        ]);

        $user->command()->create([
            'name' => 'LightSwitch Digital'
        ]);
    }
}
