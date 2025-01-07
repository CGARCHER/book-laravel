<?php

namespace Database\Seeders;

use App\Enums\StoreType;
use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $store = new Store();
        $store->dir = "mayor 5";
        $store->type = StoreType::PHYSICAL;
        $store->sale = true;
        $store->save();

        $store = new Store();
        $store->dir = "paseo 11";
        $store->type = StoreType::OTHER;
        $store->sale = false;
        $store->save();
    }
}
