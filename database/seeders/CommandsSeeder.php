<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CommandsSeeder extends Seeder
{

    public function run()
    {
        $command = User::first()->commands()->create([
            'name' => 'Команда А'
        ]);

        foreach (User::all() as $user) {
            $user->commands()->attach($command->id);
        }
    }
}
