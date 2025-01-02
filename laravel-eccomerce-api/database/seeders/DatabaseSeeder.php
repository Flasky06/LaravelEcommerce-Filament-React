<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            OrderSeeder::class,
            OrderItemSeeder::class,
            CartSeeder::class,
        ]);

        User::factory()->create([
            'first_name' => 'Bonface',
            'last_name' => 'Njuguna',
            'email' => 'bonynjuguna@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}