<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryIds = Category::pluck('id');

        foreach (range(1, 20) as $index) {
            Product::create([
                'name' => "Product $index",
                'description' => "Description for Product $index",
                'price' => rand(100, 1000),
                'stock' => rand(10, 50),
                'image' => 'https://via.placeholder.com/150',
                'category_id' => $categoryIds->random(),
            ]);
        }
    }
}
