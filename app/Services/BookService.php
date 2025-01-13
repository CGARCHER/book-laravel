<?php

namespace App\Services;

use App\Exceptions\BookNotFoundException;
use App\Models\Book;
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

    public function deleteBook($id){
        return $this->bookRepository->delete($id);
    }

    public function createBook($book){
        $libro = new Book();
        $libro->fill($book);
        
        return $this->bookRepository->create($libro);
    }

    public function updateBook($id,$data){
        $book = $this->bookRepository->getBook($id);
        $book->fill($data);
        $this->bookRepository->update($book);
        return $book;
    }
}
