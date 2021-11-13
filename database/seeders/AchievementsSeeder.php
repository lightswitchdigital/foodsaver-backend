<?php

namespace Database\Seeders;

use App\Models\Achievement;
use Illuminate\Database\Seeder;

class AchievementsSeeder extends Seeder
{

    public function run()
    {
        Achievement::insert([
            [
                'name' => 'Прибыл на точку вовремя',
                'desc' => null,
                'min_value' => 0,
                'max_value' => 30,
                'reward' => 'Достижение: Всегда вовремя'
            ],
            [
                'name' => 'Прибыл на точку вовремя 2',
                'desc' => null,
                'min_value' => 0,
                'max_value' => 60,
                'reward' => 'Достижение: Всегда вовремя 2'
            ],
        ]);
    }
}
