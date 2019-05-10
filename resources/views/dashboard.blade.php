@extends('layouts.app')
@section('content')
<div class="card container">
  <h2 class="card-title">Books</h2>
  @include('components.flash-message')
  <table class="table table-bordered">
    <tr>
      <th >Title</th>
      <th >Autor</th>
      <th >Employee</th>
      <th >Action</th>
    </tr>
    <tbody>
      @foreach($books as $book)
      <tr>
        <td> {{ $book->title }} </td>
        <td> {{ $book->author }} </td>
        <td> {{ $book->user->name }} </td>
        <td>
          <a href='{{url("/books/edit/$book->id")}}' class="btn btn-secondary">Edit</a>
          <a href='{{url("/books/delete/$book->id")}}' class="btn btn-danger" onclick="return confirm('Confirm Exclusion?')">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="card-header">
    <a class="btn btn-primary" href="/books/new"> Register Book </a>
  </div>
  <hr>
  <div class="card container">
    <h2 class="card-title">Borrowed Books</h2>
    <table class="table table-bordered">
      <tr>
        <th >Book</th>
        <th >User</th>
        <th >Loan Date</th>
        <th >Devolution Date</th>
        <th >Action</th>
      </tr>
      <tbody>
        @foreach($rentalbooks as $rentalbook)
        <tr>
          <td> {{ $rentalbook->book->title }} </td>
          <td> {{ $rentalbook->user->name }} </td>
          <td> {{ $rentalbook->date_rental }} </td>
          <td> {{ $rentalbook->date_devolution }} </td>
          <td>
            <a href='{{url("/rentalbooks/delete/$rentalbook->id")}}' class="btn btn-danger" onclick="return confirm('Confirm Exclusion?')">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <div class="card-header">
      <a class="btn btn-primary" href="/rentalbooks/new"> Rent Book </a>
    </div>

    @endsection
