<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orderIds = Order::pluck('id');
        $productIds = Product::pluck('id');

        foreach (range(1, 50) as $index) {
            OrderItem::create([
                'order_id' => $orderIds->random(),
                'product_id' => $productIds->random(),
                'quantity' => rand(1, 5),
                'price' => rand(100, 1000),
            ]);
        }
    }
}