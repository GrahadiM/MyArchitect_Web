<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(
            [
                RoleSeeder::class,
                UsersSeeder::class,
                GenderSeeder::class,
                StatusSeeder::class,
                CategoryTypeSeeder::class,
                CategoryModelSeeder::class,
                // PriceTableSeeder::class,
                PortofolioSeeder::class,
                OrderTableSeeder::class,
                ReviewTableSeeder::class,
                ProgresTableSeeder::class,
            ]
        );
    }
}
