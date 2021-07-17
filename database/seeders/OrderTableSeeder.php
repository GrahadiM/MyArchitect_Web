<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::truncate();
        $orders = [
            [
                'user_id' => 4,
                'portofolio_id' => 1,
                'price_id' => 2,
                'wa' => '085767113554',
                'area' => '1250',
                'address' => 'Jakarta Timur',
            ],
        ];
        
        foreach ($orders as $key => $value) {
            Order::create($value);
        }
    }
}
