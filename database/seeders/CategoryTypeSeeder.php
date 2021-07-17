<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\CategoryType;
use Illuminate\Database\Seeder;

class CategoryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryType::truncate();
        $category = collect([
            'rumah tinggal',
            'villa',
            'cafe',
            'kantor',
            'apartemen',
            'restoran',
            'ruang serba guna',
            'lapangan futsal',
            'unfinished',
        ]);

        $category->each(function($category){
            CategoryType::create([
                'title' => $category,
                'slug' => Str::slug($category),
            ]);
        });
    }
}
