@extends('layouts.app')
@section('content')

<div class="card container"><br>
    <h2 class="card-title">Users/Employee</h2>
    <table class="table table-bordered table-hover">
        @include('components.flash-message')
        <tr>
            <th>Id </th>
            <th>Name</th>
            <th>Email</th>
            <th>Registered in</th>
            <th>Options</th>
        </tr>
        <tbody>
            @foreach($users as $i)
            <tr>
                <td>{{$i->id}}</td>
                <td>{{$i->name}}</td>
                <td>{{$i->email}}</td>
                <td>{{$i->created_at}}</td>
                <td class="col-lg-8">
                    <a href='{{url("/users/delete/$i->id")}}' class="btn btn-outline-danger"
                        onclick="return confirm('Confirm Exclusion?')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="card-footer container">
    {{ $users->links() }}
</div>
<hr>

@endsection