<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        $this->call(JoursSeeder::class);
        $this->call(OrderStatusSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(TransactionTypeSeeder::class);
    }
}
