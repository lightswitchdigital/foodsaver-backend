<?php

namespace Database\Seeders;

use App\Models\Ward;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class WardsSeeder extends Seeder
{

    public function run()
    {
        Ward::insert([
            [
                'volunteer_id' => '1',
                'name' => 'Лена',
                'last_name' => 'Петрова',
                'phone' => '+78374791857',
                'age' => 48,
                'disabled' => null,
                'allergy' => null,
                'address' => 'Карягина, 19',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
