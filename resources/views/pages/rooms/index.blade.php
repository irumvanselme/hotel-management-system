@extends("layouts.dasboard")

@section("body")
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="font-weight-bolder pb-5 pt-4">All Rooms ....</h1>
            <div>
                <a href="/rooms/new">Create New</a>
            </div>
        </div>

        <table class="table table-hover bg-white table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Room number</th>
                <th>Status</th>
                <th>Room Type</th>
            </tr>
            </thead>
            <tbody>
            @foreach($rooms as $key=>$room)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $room->room_number }}</td>
                    <td>{{ $room->status }}</td>
                    <td>{{ $room->room_type->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
