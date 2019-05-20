<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Book;
use App\User;
use App\Repositories\BookRepository;
use App\Http\Requests\StoreBooksRequest;

class BookController extends Controller
{
  
  public function form($title)
  {
    $usersForm = User::all();
    return view("newBook", compact(['usersForm', 'title']));
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

  public function store(BookRepository $repository, StoreBooksRequest $request)
  {
    $data = $request->all();
    $data['image'] = $request->file('image')->store('images','public');
    $book = $repository->create($data);
    return redirect('/dashboard')->with('success', "Book Registered");
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
    return view('newBook', compact("books","id", "usersForm"));
  }

  public function delete($id, Book $books)
  {
    $data = $books->find($id);
    $data->destroy($id);
    return redirect('/dashboard')
    ->with('error', "Book Deleted");
  }

}