<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Book;
use App\User;

class BookController extends Controller
{

  public function form($title)
  {
    $usersForm = User::all();
    return view("formBook", compact(['usersForm', 'title']));
  }

  public function new()
  {
  return $this->form("New Book");
  }

  public function create(Request $dataFormulary){
    $book = new Book;
    $book->title = $dataFormulary->input('title');
    $book->author = $dataFormulary->input('author');
    $book->user = $dataFormulary->input('id_user');
    $book->save();

    return redirect('/dashboard');
  }

  public function save(Request $dataFormulary, Book $books, $id = null)
  {

         if($id > 0)
         {
             $data = $books->find($id);
             $data->update($dataFormulary->all());
         }
         else
         {
             $books->create($dataFormulary->all());
         }

         return redirect('/dashboard');
   }

   public function edit(Book $books, $id, User $users){
    $books = Book::find($id);
      if (isset($books)) {
      $books->save();
      }
        $usersForm = $users->all();
        return view('formBook', compact("books","id", "usersForm"));
    }

  public function delete($id, Book $books)
  {
      $data = $books->find($id);
      $data->destroy($id);
      return redirect('/dashboard')
              ->with('danger', "Book Deleted");
  }

}
