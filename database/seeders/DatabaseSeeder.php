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
        //Aqui se indican todos los seeders a ejecutar.
        $this->call([BookSeeder::class, StoreSeeder::class, StockSeeder::class]);
    }
}
