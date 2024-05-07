<header>
    <div class="container d-flex align-items-center  {{Route::currentRouteName() == 'comics.show' ? 'justify-content-center' : 'justify-content-between'}}">
        <a href="/"><img id="logo" src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="logo" /></a>
        <ul id="ul_head" class="{{Route::currentRouteName() == 'comics.create' ? 'd-none' : ''}}">
            <a id="head" href="/" class="{{Route::currentRouteName() == 'comics.show' ? '' : 'd-none'}}" style="font-size: 20px;"><strong><i>Home</i></strong></a>
            <a id="head" href="{{route('comics.index')}}" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">admin</a>
            <a id="head" href="{{route('comics.create')}}" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">create</a>
            <a id="head" href="{{route('json-api')}}" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">json</a>
            <a id="head" href="{{route('comics.edit' , $comic)}}" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">edit</a>
            <a id="head" href="#" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">tv</a>
            <a id="head" href="#" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">games</a>
            <a id="head" href="#" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">collectibles</a>
            <a id="head" href="#" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">videos</a>
            <a id="head" href="#" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">fans</a>
            <a id="head" href="#" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">news</a>
            <a id="head" href="#" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">shop</a>
        </ul>
        {{-- <i id="bars_hide_head" class="fa-solid fa-bars"></i> --}}
        {{-- <div id="menu_hide_head" class="bg-light d-none">
        <ul class="row flex-column justify-content-evenly align-items-end">
            <a id="head" href="/" class="{{Route::currentRouteName() == 'comics.show' ? '' : 'd-none'}}" style="font-size: 20px;"><strong><i>Home</i></strong></a>
            <a id="head" href="{{route('comics.index')}}" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">admin</a>
            <a id="head" href="{{route('comics.create')}}" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">create</a>
            <a id="head" href="{{route('json-api')}}" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">json</a>
            <a id="head" href="#" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">movies</a>
            <a id="head" href="#" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">tv</a>
            <a id="head" href="#" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">games</a>
            <a id="head" href="#" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">collectibles</a>
            <a id="head" href="#" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">videos</a>
            <a id="head" href="#" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">fans</a>
            <a id="head" href="#" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">news</a>
            <a id="head" href="#" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">shop</a>
        </ul>
        </div> --}}
    </div>
</header>

<style>

</style>