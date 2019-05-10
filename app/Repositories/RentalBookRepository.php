<?php
namespace App\Repositories;

use App\Model\RentalBook;

class RentalBookRepository
{
  protected $book;

  public function __construct(RentalBook $rentalbook)
  {
    $this->rentalbook = $rentalbook;
  }

  public function create($data)
  {
    return $this->rentalbook->create($data);
  }

  public function update($data,$id)
  {

    $rentalbook =  $this->rentalbook->find($id);
    return $rentalbook->update($data);
  }
}
