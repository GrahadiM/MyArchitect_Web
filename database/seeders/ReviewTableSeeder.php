<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::truncate();
        $review = [
            [
                'user_id' => 4,
                'portofolio_id' => 1,
                'comment' => 'Mantap Desainnya memuaskan',
                'star' => 5,
            ],
        ];
        
        foreach ($review as $key => $value) {
            Review::create($value);
        }
    }
}
