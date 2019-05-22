@extends('layouts.app')
@section('content')
<section>
    <div class="card container"><br>
        <h2 class="card-title">Employees</h2>
        <table class="table table-bordered table-hover text-center">
            @include('components.flash-message')
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Registered in</th>
                <th>Actions</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                <td class="">
                    <a href='{{url("/users/delete/$user->id")}}' class="btn btn-outline-danger"
                        onclick="return confirm('Confirm Exclusion?')">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="card-footer container">
        {{ $users->links() }}
    </div>
</section>
@endsection