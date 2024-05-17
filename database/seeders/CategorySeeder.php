<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //seeders para categorias
        Category::create([
            'name' => 'Costa'
        ]);
        Category::create([
            'name' => 'Sierra'
        ]);
        Category::create([
            'name' => 'Selva'
        ]);
    } 
}
