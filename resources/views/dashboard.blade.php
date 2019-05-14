@extends('layouts.app')
@section('content')
<section>
    <div class="card container">
        <div class="card container">
            <br><a class="btn btn-primary col-2" href="/books/new"> Register Book </a><br>
            <h2 class="card-title">Books Registered</h2>
            <table class="table table-bordered">
                @include('components.flash-message')
                <tr>
                    <th>Title</th>
                    <th>Autor</th>
                    <th>Employee</th>
                    <th>Action</th>
                </tr>
                <tbody>
                    @foreach($books as $book)
                    <tr>
                        <td> {{ $book->title }} </td>
                        <td> {{ $book->author }} </td>
                        <td> {{ $book->user->name }} </td>
                        <td>
                            <a href='{{url("/books/edit/$book->id")}}' class="btn btn-secondary">Edit</a>
                            <a href='{{url("/books/delete/$book->id")}}' class="btn btn-danger"
                                onclick="return confirm('Confirm Exclusion?')">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="card-footer">
                {{ $books->links() }}
            </div>
</section>
<hr>
<section>
    <div class="card container">
        <br><a class="btn btn-primary col-2" href="/rentalbooks/new"> Rent Book </a><br>
        <h2 class="card-title">Borrowed Books</h2>
        <table class="table table-bordered">
            @include('components.flash-message')
            <tr>
                <th>Book</th>
                <th>User</th>
                <th>Loan Date</th>
                <th>Devolution Date</th>
                <th>Action</th>
            </tr>
            <tbody>
                @foreach($rentalbooks as $rentalbook)
                <tr>
                    <td> {{ $rentalbook->book->title }} </td>
                    <td> {{ $rentalbook->user->name }} </td>
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
        <div class="card-footer">
            {{ $rentalbooks->links() }}
        </div>
</section>

@endsection