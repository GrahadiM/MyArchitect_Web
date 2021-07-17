<?php

namespace Database\Seeders;

use App\Models\Price;
use Illuminate\Database\Seeder;

class PriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Price::truncate();
        $price = [
            [
                'user_id' => 3,
                'name' => 'Paket Murah',
                'price' => '30.000.000',
                'desc' => 'Hal-hal yang tidak sesuai diluar tanggung jawab saya',
            ],
            [
                'user_id' => 3,
                'name' => 'Paket Sedang',
                'price' => '60.000.000',
                'desc' => 'Hal-hal yang anda inginkan adalah tanggung jawab saya',
            ],
            [
                'user_id' => 3,
                'name' => 'Paket Mahal',
                'price' => '100.000.000',
                'desc' => 'Hal-hal yang anda inginkan adalah prioritas saya',
            ],
        ];
        
        foreach ($price as $key => $value) {
            Price::create($value);
        }
    }
}
