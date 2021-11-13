<?php

namespace Database\Seeders;

use App\Models\Organization;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OrganizationsSeeder extends Seeder
{

    public function run()
    {
        Organization::insert([
            [
                'name' => 'Пятерочка',
                'address' => 'Карягина, 57',
                'phone' => '+79967364566',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Перекресток',
                'address' => 'Абудабиева, 666',
                'phone' => '+78374658173',

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
