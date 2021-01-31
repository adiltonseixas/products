<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Seed the category.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Beleza']);
        Category::create(['name' => 'Limpeza']);
        Category::create(['name' => 'Higiene']);
        Category::create(['name' => 'Culinária']);
    }
}
