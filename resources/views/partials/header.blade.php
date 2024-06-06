<header>
    <div
        class="container d-flex align-items-center  {{Route::currentRouteName() == 'comics.show' ? 'justify-content-center' : 'justify-content-between'}}">
        <a href="/"><img id="logo" src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="logo" /></a>
        <ul id="ul_head" class="{{Route::currentRouteName() == 'comics.create' ? 'd-none' : ''}}">
            <a id="head" href="/" class="{{Route::currentRouteName() == 'comics.show' ? '' : 'd-none'}}"
                style="font-size: 20px;"><strong><i>Home</i></strong></a>
            <a id="head" href="{{route('comics.index')}}"
                class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">admin</a>
            <a id="head" href="{{route('comics.create')}}"
                class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">create</a>
            <a id="head" href="#" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">tv</a>
            <a id="head" href="#"
                class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">games</a>
            <a id="head" href="#"
                class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">collectibles</a>
            <a id="head" href="#"
                class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">videos</a>
            <a id="head" href="#" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">fans</a>
            <a id="head" href="#" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">news</a>
            <a id="head" href="#" class="{{Route::currentRouteName() == 'comics.show' ? 'd-none' : 'd-block'}}">shop</a>
        </ul>
    </div>
</header>

<style>

</style>