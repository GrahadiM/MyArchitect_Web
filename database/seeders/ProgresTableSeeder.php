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
                'name' => 'Desain dalam tahap pembuatan',
                'image' => 'step-1.jpg',
                'note' => 'Desain tanpa perbaikan',
            ],
            [
                'user_id' => 3,
                'order_id' => 1,
                'name' => 'Desain sudah selesai dibuat',
                'image' => 'step-2.jpg',
                'note' => 'Desain tanpa perbaikan',
            ],
            [
                'user_id' => 3,
                'order_id' => 1,
                'name' => 'Rumah sudah selesai dibuat',
                'image' => 'step-3.jpg',
                'note' => 'Desain tanpa perbaikan',
            ],
        ];
        
        foreach ($progres as $key => $value) {
            Progres::create($value);
        }
    }
}
