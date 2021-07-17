<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserPortofolio;

class UserPortofolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserPortofolio::truncate();
        $up = [
            [
                'user_id' => '',
                'portofolio_id' => '',
            ],
            [
                'user_id' => '',
                'portofolio_id' => '',
            ],
            [
                'user_id' => '',
                'portofolio_id' => '',
            ],
            [
                'user_id' => '',
                'portofolio_id' => '',
            ],
            [
                'user_id' => '',
                'portofolio_id' => '',
            ],
        ];
        
        foreach ($up as $key => $value) {
            UserPortofolio::create($value);
        }
    }
}
