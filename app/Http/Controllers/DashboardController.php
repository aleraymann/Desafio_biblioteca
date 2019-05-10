<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Book;
use App\Model\RentalBook;

use App\User;

class DashboardController extends Controller
{
  public function getBooks()
  {
    $books = Book::paginate(5);
    $rentalbooks = RentalBook::paginate(5);
    return view('dashboard', compact('books','rentalbooks'));
  }
  public function getRentalBooks()
  {
    $rentalbooks = RentalBook::paginate(5);
    return view('dashboard', compact('rentalbooks'));
  }
}
