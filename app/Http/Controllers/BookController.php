<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Services\BookService;
use Illuminate\Http\Response;
use Illuminate\Http\Request;


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

    public function deleteBook($id){
        $book = $this->bookService->deleteBook($id);
        return ApiResponse::success($book, "Book deleted",Response::HTTP_OK);
    }

    public function createBook(Request $request){
        $book = $this->bookService->createBook($request->all());
        return ApiResponse::success($book, "Book created",Response::HTTP_OK);
    }

    public function updateBook(Request $request,$id){
        $book = $this->bookService->updateBook($id,$request->all());
        return ApiResponse::success($book, "Book updated",Response::HTTP_OK);
    }
}
