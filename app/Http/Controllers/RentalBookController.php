<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Book;
use App\User;
use App\Model\RentalBook;
use App\Repositories\RentalBookRepository;
use App\Http\Requests\StoreRentalBooksRequest;


class RentalBookController extends Controller
{

  public function index()
  {
    $usersForm = User::all();
    $booksForm = Book::all();
    return view("newRentalBook", compact(['usersForm','booksForm']));
  }

  public function store(Request $dataFormulary, RentalBook $rentalbooks, Book $book)
  {
    $rentalbooks->create($dataFormulary->all());
    $book = $book->find($dataFormulary->get('book_id'));
    $book-> is_rent = true;
    $book->save();

    return redirect('dashboard')->with('success', "Book Lended");
  }

  public function save()
  {
    //
  }

  public function destroy($id,RentalBook $rentalbooks, Book $book )
  {
  
    $data = $rentalbooks->find($id);
    $rent = $book->find($data->book_id);
    $rent->is_rent = false;
    $rent->save();
    $data->destroy($id);
    return redirect('dashboard')->with('success', "Rental Book Deleted");
  }
}