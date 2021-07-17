<?php

namespace Database\Seeders;

use App\Models\Progres;
use Illuminate\Database\Seeder;

class ProgresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Progres::truncate();
        $progres = [
            [
                'user_id' => 3,
                'order_id' => 1,
                'termin_id' => 1,
            ],
            [
                'user_id' => 3,
                'order_id' => 1,
                'termin_id' => 2,
            ],
            [
                'user_id' => 3,
                'order_id' => 1,
                'termin_id' => 3,
            ],
        ];
        
        foreach ($progres as $key => $value) {
            Progres::create($value);
        }
    }
}
