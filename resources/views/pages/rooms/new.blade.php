@extends("layouts.dasboard")

@section("body")
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="font-weight-bolder pb-5 pt-4">New Room ....</h1>
            <div>
                <a href="/rooms">View all</a>
            </div>
        </div>

        <div>
            <form action="/rooms" method="POST">
                @csrf
                <div class="form-group w-50">
                    <label for="room_type">Select the room type</label>
                    <select id="room_type" type="text" class="form-control" name="room_type">
                        <option disabled selected> - Select the room type - </option>
                        @foreach($types as $type)
                            <option value="{{ $type->_id }}"> {{ $type->name  }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group w-50">
                    <label for="name">Room Number</label>
                    <input id="name" type="text" placeholder="Room number" class="form-control" name="room_number">
                </div>
                <div class="form-group w-50">
                    <label for="status">Select the status</label>
                    <select name="status" id="status" class="form-control">
                        <option selected disabled> - Select the status - </option>
                        <option value="OPEN">Open</option>
                        <option value="OCCUPIED">Occupied</option>
                        <option value="NOT_AVAILABLE">Not available</option>
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection
