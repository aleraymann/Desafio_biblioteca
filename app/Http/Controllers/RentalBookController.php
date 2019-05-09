<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Book;
use App\User;
use App\Model\RentalBook;


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

  public function save(Request $dataFormulary, RentalBook $rentalbooks, $id = null)
  {
    try
     {
         if($id > 0)
         {
             $data = $rentalbooks->find($id);
             $data->update($dataFormulary->all());
         }
         else
         {
             $rentalbooks->create($dataFormulary->all());
         }

         return redirect('/dashboard');
     }
     catch (Exception $e)
     {
         return $e;
     }
     catch(PDOException $e)
     {
         return $e->getMessage();
     }
   }

   public function edit(RentalBook $rentalbooks, $id, User $users, Book $books){
    $rentalbooks = RentalBook::find($id);
      if (isset($rentalbooks)) {
      $rentalbooks->save();
      }
        $usersForm = $users->all();
        $booksForm = $books->all();
        return view('formRentalBook', compact("rentalbooks","id", "usersForm","booksForm"));
    }

  public function delete($id, RentalBook $rentalbooks)
  {
      $data = $rentalbooks->find($id);
      $data->destroy($id);
      return redirect('/dashboard')
              ->with('danger', "Rental Book Deleted");
  }
}
