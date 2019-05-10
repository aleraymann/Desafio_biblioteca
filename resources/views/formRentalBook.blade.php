@extends('layouts.app')
@section('content')

<div class="card-body">
  <form method="post" action="{{url("/rentalbooks/save")}}">
    @csrf
    <fieldset class="col-lg-5 offset-2">
      <div class="form-row">
        <div class="form-group col-lg-3">
          <label for="">Book</label>
          <select name="id_book">
            <option>Select Book</option>
            @foreach($booksForm as $book)
            @if($book->is_rent !=true)
            {
              <option value="{{$book->id}}">{{$book->title}} - {{$book->author}}</option>
            }
            @endif
            @endforeach
          </select>
        </div>
        <div class="form-group col-lg-12">
          <label for="author">Loan Date:</label>
          <input type="date" class="form-control" name="date_rental" id="date_rental" value="{{ isset($rentalbooks->date_rental) ? $rentalbooks->date_rental:'' }}" required>
        </div>
        <div class="form-group col-lg-12">
          <label for="author">Devolution Date:</label>
          <input type="date" class="form-control" name="date_devolution" id="date_devolution" value="{{ isset($rentalbooks->date_devolution) ? $rentalbooks->date_devolution:'' }}"required>
        </div>
        <div class="form-group col-lg-3">
          <label for="">Employee</label>
          <select name="id_user">
            <option>Select Employee</option>
            @foreach($usersForm as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <button class="btn btn-outline-primary">Save</button>
      <a href="/dashboard" class="btn btn-outline-danger">Cancel</a>
    </fieldset>
    {{csrf_field() }}
  </form>
  @if($errors->any())
  <div class="card-footer">
    @foreach($errors->all() as $i)
    <div class="alert alert-danger" role="alert">
      {{$i}}
    </div>
    @endforeach
  </div>
  @endif
  @endsection
