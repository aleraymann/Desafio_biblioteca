<?php
namespace App\Repositories;

use App\Model\Book;

class BookRepository
{
  protected $book;

  public function __construct(Book $book)
  {
    $this->book = $book;
  }

  public function create($data)
  {
    return $this->book->create($data);
  }

  public function update($data,$id)
  {

    $book =  $this->book->find($id);
    return $book->update($data);
  }
}
