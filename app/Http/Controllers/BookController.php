<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Services\BookService;
use Illuminate\Http\Response;

class BookController extends Controller
{
    public $bookService;

    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    public function getAllBooks()
    {
        $books = $this->bookService->getAllBooks();
        return ApiResponse::success($books, "Books found",Response::HTTP_OK);
    }

    public function getBook($id)
    {
        $book = $this->bookService->getBook($id);
        return ApiResponse::success($book, "Book found",Response::HTTP_OK);
    }
}
