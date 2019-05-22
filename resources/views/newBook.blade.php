@extends('layouts.app')
@section('content')
<div class="container">
    <h3>New Book</h3>
    <div class="card-header">
        @include('partials._formBook')
    </div>
</div>
@endsection