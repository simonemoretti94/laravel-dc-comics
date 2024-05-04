<header>
    <div class="container d-flex justify-content-between align-items-center">
        <a href="/"><img id="logo" src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="logo" /></a>
        <ul>
            <a href="/" class="{{Route::currentRouteName('index') ? 'd-none' : 'd-block'}}"><strong><i>Home</i></strong></a>
            <a href="{{route('json-api')}}">json</a>
            <a href="#">comic</a>
            <a href="#">comics</a>
            <a href="#">movies</a>
            <a href="#">tv</a>
            <a href="#">games</a>
            <a href="#">collectibles</a>
            <a href="#">videos</a>
            <a href="#">fans</a>
            <a href="#">news</a>
            <a href="#">shop</a>
        </ul>
    </div>
</header>