@extends("layouts.__app")

@section("content")
    <div class="min-vh-100 d-flex flex-column justify-content-between">
        <header>
            @component("components.Reusable.navbar")
            @endcomponent
        </header>
        <main>
            @yield("main")
        </main>
        <footer>
            @component("components.Reusable.footer")

            @endcomponent
        </footer>
    </div>
@endsection
