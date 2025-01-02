<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userIds = User::pluck('id');
        $productIds = Product::pluck('id');

        foreach (range(1, 30) as $index) {
            Cart::create([
                'user_id' => $userIds->random(),
                'product_id' => $productIds->random(),
                'quantity' => rand(1, 5),
            ]);
        }
    }
}