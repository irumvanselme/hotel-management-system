@extends("layouts.dasboard")

@section("body")
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="font-weight-bolder pb-5 pt-4">Create new Room type ....</h1>
            <div>
                <a href="/rooms/types">View all</a>
            </div>
        </div>
        <form action="/rooms/types" method="POST">
            @csrf
            <div class="form-group w-50">
                <label for="name">Type name</label>
                <input id="name" type="text" placeholder="Type name" class="form-control" name="name">
            </div>
            <div class="form-group w-50">
                <label for="name">Type Description</label>
                <textarea id="name" type="text" placeholder="Type name" class="form-control" name="description"></textarea>
            </div>
            <div class="form-group w-50">
                <label for="name">Price per night</label>
                <input id="name" type="number" placeholder="Type name" class="form-control" name="price_per_night">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
