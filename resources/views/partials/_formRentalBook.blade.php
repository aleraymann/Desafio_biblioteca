<form method="post" action="{{ route('storeRental') }}">
    @csrf
    <div class="card-header">
        <div class="card-content container">
            <div class="form-group col-lg-3">
                <h5>Books Available</h5>
                <select name="book_id">
                    <option>Please select a book</option>
                    @foreach($booksForm as $book)
                    @if($book->is_rent !=true)
                    {
                    <option value="{{$book->id}}">{{$book->title}} - {{$book->author}}</option>
                    }
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group col-lg-3">
                <h5> Renter</h5>
                <select name="renter_id">
                    <option>Please select a employee</option>
                    @foreach($usersForm as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-lg-12">
                <label for="author">Loan Date:</label>
                <input type="date" class="form-control" name="date_rental" id="date_rental"
                    value="{{ isset($rentalbooks->date_rental) ? $rentalbooks->date_rental:'' }}" required>
            </div>
            <div class="form-group col-lg-12">
                <label for="author">Devolution Date:</label>
                <input type="date" class="form-control" name="date_devolution" id="date_devolution"
                    value="{{ isset($rentalbooks->date_devolution) ? $rentalbooks->date_devolution:'' }}" required>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-outline-primary">Save</button>
            <a href="{{ route('dashboard') }}" class="btn btn-outline-danger">Cancel</a>
        </div>
        {{csrf_field() }}
</form>
@if($errors->any())
<div class="card-footer">
    @foreach($errors->all() as $i)
    <div class="alert alert-danger" role="alert">
        {{$i}}
    </div>
    @endforeach
    @endif