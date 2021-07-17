<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\CategoryModel;
use Illuminate\Database\Seeder;

class CategoryModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryModel::truncate();
        $category = collect([
            'minimalis',
            'klasik',
            'skandinavia',
            'industril',
            'tradisional',
            'modern',
            'asian',
            'kontemporer',
            'tropical',
        ]);

        $category->each(function($category){
            CategoryModel::create([
                'title' => $category,
                'slug' => Str::slug($category),
            ]);
        });
    }
}
