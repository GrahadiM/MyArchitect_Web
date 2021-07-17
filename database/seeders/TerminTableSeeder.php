<?php

namespace Database\Seeders;

use App\Models\Termin;
use Illuminate\Database\Seeder;

class TerminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Termin::truncate();
        $termin = [
            [
                'name' => 'Desain dalam tahap pembuatan',
                'image' => 'step-1.jpg',
                'note' => 'Desain tanpa perbaikan',
            ],
            [
                'name' => 'Desain sudah selesai dibuat',
                'image' => 'step-2.jpg',
                'note' => 'Desain tanpa perbaikan',
            ],
            [
                'name' => 'Rumah sudah selesai dibuat',
                'image' => 'step-3.jpg',
                'note' => 'Desain tanpa perbaikan',
            ],
        ];
        
        foreach ($termin as $key => $value) {
            Termin::create($value);
        }
    }
}
