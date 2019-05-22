@extends('layouts.app')
@section('content')
<section>
  <!-- Books -->
  <div class="card container">
    <br><a class="btn btn-primary col-2" href="/books/new"> Register Book </a><br>
    <h2 class="card-title">Books Registered</h2>
    <table class="table table-bordered table-hover text-center">
      @include('components.flash-message')
      <tr>
        <th>Book Cover</th>
        <th>Title</th>
        <th>Autor</th>
        <th>Owner</th>
        <th>Action</th>
      </tr>
      <tbody>
        @foreach($books as $book)
        <tr>
          <td><img class="img-fluid rounded" src="/storage/{{$book->image}}"></td>
          <td> {{ $book->title }} </td>
          <td> {{ $book->author }} </td>
          <td> {{ $book->owner->name }} </td>
          <td>
            <a href='{{url("/books/edit/$book->id")}}' class="btn btn-secondary">Edit</a>
            <a href='{{url("/books/delete/$book->id")}}' class="btn btn-danger"
              onclick="return confirm('Confirm Exclusion?')">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="card-footer container">
      {{ $books->links() }}
    </div>
  </section>
  <hr>
  <!-- Rental Books -->
  <section id="rental">
    <div class="card container">
      <br><a class="btn btn-primary col-2" href="/rentalbooks/new"> Rent Book </a><br>
      <h2 class="card-title">Borrowed Books</h2>
      <table class="table table-bordered table-hover text-center">
        @include('components.flash-message')
        <tr>
          <th>Book</th>
          <th>Renter</th>
          <th>Loan Date</th>
          <th>Devolution Date</th>
          <th>Action</th>
        </tr>
        <tbody>
          @foreach($rentalbooks as $rentalbook)
          <tr>
            <td> {{ $rentalbook->book->title }} </td>
            <td> {{ $rentalbook->renter->name }} </td>
            <td> {{ $rentalbook->date_rental }} </td>
            <td> {{ $rentalbook->date_devolution }} </td>
            <td>
              <a href='{{url("/rentalbooks/delete/$rentalbook->id")}}' class="btn btn-danger"
                onclick="return confirm('Confirm Exclusion?')">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="card-footer container">
        {{ $rentalbooks->links() }}
      </div>
    </section>
    <hr>

    @endsection
