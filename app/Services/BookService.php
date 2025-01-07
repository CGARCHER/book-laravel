<?php

namespace App\Services;

use App\Exceptions\BookNotFoundException;
use App\Repositories\BookRepository;
use Illuminate\Http\Response;

class BookService
{

    protected $bookRepository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function getAllBooks()
    {
        return $this->bookRepository->getAllBooks();
    }

    public function getBook($id)
    {

        $book = $this->bookRepository->getBook($id);

        if ($book == null) {
            throw new BookNotFoundException("Book not found", Response::HTTP_NOT_FOUND);
        }

        return $book;
    }
}
