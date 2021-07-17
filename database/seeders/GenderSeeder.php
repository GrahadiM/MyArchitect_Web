<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gender::truncate();
        $gender = [
            [
                'name' => 'pria',
            ],
            [
                'name' => 'wanita',
            ],
        ];
        
        foreach ($gender as $key => $value) {
            Gender::create($value);
        }
    }
}
