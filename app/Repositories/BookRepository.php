<?php

namespace App\Repositories;

use App\Enums\BookStatus;
use App\Models\Book;

class BookRepository
{
    public function getAllBooks(){
        return Book::where('status', BookStatus::ONSALE)->get();
    }

    public function getBook($id){
        return Book::find($id);
    }
}