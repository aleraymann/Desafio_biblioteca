<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Book;
use App\User;
use App\Repositories\BookRepository;
use App\Http\Requests\StoreBooksRequest;

class BookController extends Controller
{
  
  public function index()
  {
    $usersForm = User::all();
    return view("newBook", compact(['usersForm']));
  }

  public function store(BookRepository $repository, StoreBooksRequest $request)
  {
    $data = $request->all();
    $data['image'] = $request->file('image')->store('images','public');
    $book = $repository->create($data);
    return redirect('dashboard')->with('success', "Book Registered");
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
    return redirect('dashboard');
  }

  public function edit(Book $books, $id, User $users){
    $books = Book::find($id);
    if (isset($books)) {
      $usersForm = $users->all();
      return view('newBook', compact("books","id", "usersForm"));
      $books->save();
    }
    
  }
  public function update(BookRepository $repository, StoreBooksRequest $request, $id)
  {
      $book = Book::find($id);
      if (isset($book)) {
          $data = $request->all();
          $data['image'] = $request->file('image')->store('images','public');
          $book = $repository->update($data,$id);
      }
      return redirect('dashboard')->with('warning', "Product Modified");
  }


  public function destroy($id, Book $books)
  {
    $data = $books->find($id);
    $data->destroy($id);
    return redirect('dashboard')
    ->with('success', "Book Deleted");
  }

}