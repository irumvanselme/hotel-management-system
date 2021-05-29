@extends("layouts.dasboard")

@section("body")
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="font-weight-bolder pb-5 pt-4">All Room types ....</h1>
            <div>
                <a href="/rooms/types/new">Create New</a>
            </div>
        </div>

        <table class="table table-hover bg-white table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>name</th>
                    <th>Description</th>
                    <th>Price per night</th>
                </tr>
            </thead>
            <tbody>
                @foreach($room_types as $key=>$room)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td class="p-1">
                            @if($room->photos)
                                <img src="{{ $room->photos[0] }}" alt="{{ $room->name }}">
                            @else
                                <div>No Image available ....</div>
                            @endif
                        </td>
                        <td>{{ $room->name }}</td>
                        <td>{{ substr($room->description, 0, 40) }}..... <br> <a href="#">Read more</a></td>
                        <td>{{ $room->price_per_night }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
