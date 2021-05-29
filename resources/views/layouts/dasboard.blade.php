@extends("layouts.__app")
@section("content")
    <div class="row mx-0">
        <div class="col-2 px-0 border-right bg-white shadow-sm rounded-0 vh-100">
            <ul>
                <li><a href="/rooms">Rooms</a></li>
                <li><a href="/rooms/types">Room Types</a></li>
            </ul>
        </div>
        <div class="col-10 px-0">
            <div class="navigation bg-white border-bottom p-2 pl-5">
                <h5 class="font-weight-bolder">Dashboard</h5>
            </div>
            @yield("body")
        </div>
    </div>
@endsection
