@extends("layouts.site")

@section("content")
    <div class="container mt-5">
        <h3>Room information</h3>
        Room number : {{ $room->room_number }} <br>
        Status : {{ $room->status }} <br>
        Type : {{ $room->room_type->name }} <br>
        Price per night : {{ $room->room_type->price_per_night }} <br>
        <h4 class="my-5">Apply Now ...</h4>
        <form action="{{ '/rooms/'.$room->_id.'/book'  }}" method="POST">
            @csrf
            <h5>Customer's information</h5>
            <div class="form-group w-50">
                <label for="name1">First name</label>
                <input id="name1" type="text" class="form-control" name="first_name">
            </div>
            <div class="form-group w-50">
                <label for="name2">Last name</label>
                <input id="name2" type="text" class="form-control" name="last_name">
            </div>
            <div class="form-group w-50">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control">
                    <option disabled selected> - select the gender - </option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group w-50">
                <label for="phone">Phone</label>
                <input id="phone" type="tel" class="form-control" name="phone">
            </div>
            <div class="form-group w-50">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email">
            </div>
            <div class="form-group w-50">
                <label for="address">Address</label>
                <input id="address" type="text" class="form-control" name="address">
            </div>

            <h5>Booking information</h5>

            <div class="form-group w-50">
                <label for="date">Date</label>
                <input id="date" type="date" class="form-control" name="from">
            </div>

            <div class="form-group w-50">
                <label for="nights">Nights</label>
                <input id="nights" type="text" class="form-control" name="nights">
            </div>
            <div class="form-group w-50">
                <label for="comment">Comment</label>
                <textarea id="comment" class="form-control" name="comment"></textarea>
            </div>
            <button type="submit" class="my-5 btn btn-primary px-5">Create</button>
        </form>
    </div>
@endsection
