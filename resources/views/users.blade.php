@extends('layouts.app')
@section('content')
<h5 class="card-title container">Users / Employee</h5>
@include('components.flash-message')
<table class="table table-bordered table-hover container" id="tableUsers">
  <thead>
    <tr>
      <th>Id</th>
      <th class=" col-5">Name</th>
      <th class=" col-5">Email</th>
      <th class=" col-2">Option</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $i)
    <tr>
      <td>{{$i->id}}</td>
      <td>{{$i->name}}</td>
      <td>{{$i->email}}</td>
      <td class="col-lg-8">
        <a href='{{url("/users/delete/$i->id")}}' class="btn btn-outline-danger" onclick="return confirm('Confirm Exclusion?')">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
