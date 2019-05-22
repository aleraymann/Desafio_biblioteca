<form method="post" action="{{route('updateBook',$book->id)}}" enctype="multipart/form-data">
    @csrf
    <div class=" card-content container">
        <div class="form-group col-lg-12">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $book->title }}">
        </div>
        <div class="form-group col-lg-12">
            <label for="author">Author:</label>
            <input type="text" class="form-control" name="author" id="author" value="{{ $book->author }}">
        </div>
        <div class="form-group col-lg-3">
            <label for="">Owner</label>
            <select name="owner_id">
                <option>Select Employee</option>
                @foreach($usersForm as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group text-left">
            <label for="file">Book Cover</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="image" name="image">
                <label class="custom-file-label" for="image">Click here and choose your image</label>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <button class="btn btn-outline-primary">Save</button>
        <a href="/dashboard" class="btn btn-outline-danger">Cancel</a>
    </div>
    {{csrf_field() }}
</form>

@if($errors->any())
<div class="card-footer container">
    @foreach($errors->all() as $i)
    <div class="alert alert-danger" role="alert">
        {{$i}}
    </div>
    @endforeach
    @endif