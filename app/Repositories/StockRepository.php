<?php

namespace App\Repositories;

use App\Models\Stock;

class StockRepository
{
    public function getStockByBook($book){
        return Stock::with('book','store')->where('book_id', $book->id)->get();
    }
}