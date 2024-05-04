<header>
    <div class="container d-flex align-items-center  {{Route::currentRouteName() == 'comics.show' ? 'justify-content-center' : 'justify-content-between'}}">
        <a href="/"><img id="logo" src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="logo" /></a>
        <ul>
            <a href="/" class="{{Route::currentRouteName() == 'comics.show' ? '' : 'd-none'}}" style="font-size: 20px;"><strong><i>Home</i></strong></a>
            <a href="{{route('json-api')}}" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">json</a>
            <a href="#" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">comic</a>
            <a href="#" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">comics</a>
            <a href="#" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">movies</a>
            <a href="#" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">tv</a>
            <a href="#" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">games</a>
            <a href="#" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">collectibles</a>
            <a href="#" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">videos</a>
            <a href="#" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">fans</a>
            <a href="#" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">news</a>
            <a href="#" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">shop</a>
        </ul>
    </div>
</header>