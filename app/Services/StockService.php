<?php

namespace App\Services;

use App\Exceptions\BookNotFoundException;
use App\Repositories\BookRepository;
use App\Repositories\StockRepository;
use Illuminate\Http\Response;

class StockService
{
    private $stockRepository;
    private $bookRepository;

    public function __construct(BookRepository $bookRepository, StockRepository $stockRepository)
    {
        $this->bookRepository = $bookRepository;
        $this->stockRepository = $stockRepository;
    }

    public function getStockByBook($bookId)
    {
        $book = $this->bookRepository->getBook($bookId);

        if ($book == null) {
            throw new BookNotFoundException("Book not found", Response::HTTP_NOT_FOUND);
        }
        return $this->stockRepository->getStockByBook($book);
    }
}
