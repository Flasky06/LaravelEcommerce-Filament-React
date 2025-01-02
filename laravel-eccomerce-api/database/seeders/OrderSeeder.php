<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userIds = User::pluck('id');

        foreach (range(1, 10) as $index) {
            Order::create([
                'user_id' => $userIds->random(),
                'status' => 'pending',
                'total_amount' => rand(500, 5000),
            ]);
        }
    }
}