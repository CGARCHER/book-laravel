<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Stock;
use App\Models\Store;
use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stock = new Stock();
        $stock->amount=100;
        $stock->book_id = Book::where('isbn','999-3-16-111111-0')->first()->id;
        $stock->store_id = Store::where('dir','mayor 5')->first()->id;
        $stock->save();

        $stock = new Stock();
        $stock->amount=15;
        $stock->book_id = Book::where('isbn','888-3-16-111111-2')->first()->id;
        $stock->store_id = Store::where('dir','paseo 11')->first()->id;
        $stock->save();
    }
}
