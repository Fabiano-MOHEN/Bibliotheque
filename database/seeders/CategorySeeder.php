<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::query()->delete();
        Category::query()->create(['name'=>'Thriller']);
        Category::query()->create(['name'=>'Fantasy']);
        Category::query()->create(['name'=>'Science Fiction']);
        Category::query()->create(['name'=>'Romance']);
        Category::query()->create(['name'=>'Horror']);
        Category::query()->create(['name'=>'Biography']);
        Category::query()->create(['name'=>'Adventure']);
        Category::query()->create(['name'=>'Autobiography']);
    }
}
