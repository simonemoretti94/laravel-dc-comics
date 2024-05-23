@extends('layouts.adminLayouts.app')

@section('title', "@yield('title')")


@section('content')

<h1 class="p-3 bg-dark text-white">@yield('h1-content')</h1>
<div class="container py-5">

    {{-- open error --}}

    @include('partials.validation-error')

    {{-- close error --}}
    @yield('form-head')
        @csrf

        @yield('method')

        {{-- title --}}
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title')
                is-invalid
            @enderror" name="title" id="title" aria-describedby="titleHelper" placeholder="title" value="{{ old('title' , Route::currentRouteName() == 'comics.edit' ? $comic->title : '' ) }}" />
            <small id="refCodeHelper" class="form-text text-muted @error('title')
                d-none
            @enderror">Type a title</small>

             @error('title')
            <div class="alert alert-danger mt-1">
            {{$message}}
            </div>
            @enderror
        </div>

        {{-- description --}}
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control  @error('description')
                is-invalid
            @enderror" name="description" id="description" rows="3">{{ old('description' , Route::currentRouteName() == 'comics.edit' ? $comic->description : '' ) }}</textarea>
             @error('description')
            <div class="alert alert-danger mt-1">
            {{$message}}
            </div>
            @enderror
        </div>

        {{-- thumbnail path --}}
        {{-- <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" class="form-control @error('thumb')
                is-invalid
            @enderror" name="thumb" id="thumb" aria-describedby="thumbHelper" placeholder="thumb path" value="{{ old('thumb' , Route::currentRouteName() == 'comics.edit' ? $comic->thumb : '' ) }}" />
            <small id="thumbHelper" class="form-text text-muted @error('thumb')
                d-none
            @enderror">Type a path</small>
             @error('thumb')
            <div class="alert alert-danger mt-1">
            {{$message}}
            </div>
            @enderror
        </div> --}}

        {{-- copied storage thumb start --}}

        <div class="form-group mb-3">
            <label for="thumb"></label>
            <input class="form-control" type="file" name="thumb" id="thumb">
        </div>
        @error('thumb')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- copied storage thumb end --}}

        

        {{-- price --}}
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" class="form-control" name="price" id="price" aria-describedby="priceHelper" placeholder="example: 10.99" value="{{ old('price' , Route::currentRouteName() == 'comics.edit' ? $comic->price : '' ) }}" />
            <small id="priceHelper" class="form-text text-muted">Type the price</small>
        </div>

        {{-- series --}}
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelper" placeholder="series" value="{{ old('series' , Route::currentRouteName() == 'comics.edit' ? $comic->series : '' ) }}" />
            <small id="seriesHelper" class="form-text text-muted">Type a serie name</small>
        </div>

        {{-- sale date --}}
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="sale_dateHelper" placeholder="type a date" value="{{ old('sale_date' , Route::currentRouteName() == 'comics.edit' ? $comic->sale_date : '' ) }}" />
            <small id="sale_dateHelper" class="form-text text-muted">Type a sale date</small>
        </div>

        {{-- type --}}
        <div class="mb-3">
            <label for="type" class="form-label">Product type</label>
            <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelper" placeholder="product type" value="{{ old('type' , Route::currentRouteName() == 'comics.edit' ? $comic->type : '' ) }}"/>
            <small id="typeHelper" class="form-text text-muted">Product type</small>
        </div>



        <button type="submit" class="btn btn-dark">@yield('button')</button>



    </form>
</div>


@endsection