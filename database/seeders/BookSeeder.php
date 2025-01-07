<?php

namespace Database\Seeders;

use App\Enums\BookStatus;
use App\Enums\BookType;
use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $book = new Book();
        $book->isbn = "999-3-16-111111-0";
        $book->used = false;
        $book->type = BookType::THRILLER;
        $book->status = BookStatus::ONSALE;
        $book->price = 9.99;
        $book->published = "2023-01-01";
        $book->save();

        $book = new Book();
        $book->isbn = "888-3-16-111111-2";
        $book->used = true;
        $book->type = BookType::DRAMA;
        $book->status = BookStatus::PREORDER;
        $book->price = 10.50;
        $book->published = "2024-01-01";
        $book->save();

        $book = new Book();
        $book->isbn = "777-3-16-111111-2";
        $book->used = true;
        $book->type = BookType::SCIFI;
        $book->status = BookStatus::ONSALE;
        $book->price = 10.99;
        $book->published = "2024-01-01";
        $book->save();
    }
}
