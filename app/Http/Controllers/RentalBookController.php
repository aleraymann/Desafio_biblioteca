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

  public function form($title)
  {
    $usersForm = User::all();
    $booksForm = Book::all();
    return view("formRentalBook", compact(['usersForm','booksForm', 'title']));
  }
  public function new()
  {
    return $this->form("New Rental Book");
  }

  public function create(Request $dataFormulary){
    $rentalbooks = new RentalBook;
    $rentalbooks->user = $dataFormulary->input('id_user');
    $rentalbooks->book = $dataFormulary->input('id_book');
    $rentalbook->date_rental = $dataFormulary->input('date_rental');
    $rentalbook->date_devolution = $dataFormulary->input('date_devolution');
    $rentalbooks->save();

    return redirect('/dashboard');
  }
  public function store(RentalBookRepository $repository, StoreRentalBooksRequest $request)
  {
    $data = $request->all();
    $rentalbook = $book->find($data->get('id_book'));
    $book-> is_rent = true;
    $book = $repository->create($data);
    return redirect('/dashboard')->with('success', "Book Lended");
  }

  public function save(Request $dataFormulary, RentalBook $rentalbooks, Book $book)
  {
    $rentalbooks->create($dataFormulary->all());
    $book = $book->find($dataFormulary->get('id_book'));
    $book-> is_rent = true;
    $book->save();

    return redirect('/dashboard')->with('success', "Book Lended");
  }

  public function delete($id,RentalBook $rentalbooks, Book $book )
  {
  
    $data = $rentalbooks->find($id);
    $rent = $book->find($data->id_book);
    $rent->is_rent = false;
    $rent->save();
    $data->destroy($id);
    return redirect('/dashboard')->with('error', "Rental Book Deleted");
  }
}