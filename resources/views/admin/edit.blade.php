@extends('layouts.adminLayouts.app')

@section('title' , 'edit comic')

@section('content')

{{-- {{ dd($comic);}} --}}

<h1 class="p-3 bg-dark text-white">Edit comic</h1>
<div class="container py-5">

{{-- open error --}}

@include('partials.validation-error')

{{-- close error --}}

<form action="{{route('comics.update' , $comic)}}" method="post">
    @csrf

    @method('PUT')

        {{-- title --}}
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>

            <input type="text" class="form-control @error('title')
                is-invalid
            @enderror" name="title" id="title" aria-describedby="titleHelper" placeholder="title" value="{{ old('title' , $comic->title) }}" />

            <small id="titleHelper" class="form-text text-muted @error('title')
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

            <textarea class="form-control @error('description')
                is-invalid
            @enderror" name="description" id="description" rows="3">{{ old('description' , $comic->description) }}</textarea>

             <small id="descriptionHelper" class="form-text text-muted @error('description')
                d-none
            @enderror">Type a description</small>
            @error('description')
            <div class="alert alert-danger mt-1">
                {{$message}}
            </div>
            @enderror
        </div>

        {{-- thumbnail path --}}
        <div class="mb-3 d-flex gap-2 align-items-center">
            <img width="200" class="img-fluid" style="height: 200px;" src="{{$comic->thumb}}" alt="{{$comic->title}}">

            <div class="mb-3 w-100">

                <label for="thumb" class="form-label">Thumb</label>

                <input type="text" class="form-control @error('thumb')
                    is-invalid
                @enderror" name="thumb" id="thumb" aria-describedby="thumbHelper" placeholder="thumb path" value="{{ old('thumb' , $comic->thumb) }}" />

                <small id="thumbHelper" class="form-text text-muted @error('thumb')
                    d-none
                @enderror">Type a path</small>
                @error('description')
                <div class="alert alert-danger mt-1">
                    {{$message}}
                </div>
                @enderror

            </div>
        
        </div>

        {{-- price --}}
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>

            <input type="number" step="0.01" class="form-control @error('price')
                is-invalid
            @enderror" name="price" id="price" aria-describedby="priceHelper" placeholder="example: 10.99" value="{{ old('price' , $comic->price) }}" />

            <small id="priceHelper" class="form-text text-muted @error('price')
                d-none
            @enderror">Type the price</small>
            @error('price')
                <div class="alert alert-danger mt-1">
                    {{$message}}
                </div>
            @enderror
        </div>

        {{-- series --}}
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>

            <input type="text" class="form-control @error('series')
                is-invalid
            @enderror" name="series" id="series" aria-describedby="seriesHelper" placeholder="series" value="{{ old('series' , $comic->series) }}"/>

            <small id="seriesHelper" class="form-text text-muted @error('series')
                d-none
            @enderror">Type a serie name</small>
            @error('series')
                <div class="alert alert-danger mt-1">
                    {{$message}}
                </div>
            @enderror
        </div>

        {{-- sale date --}}
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>

            <input type="text" class="form-control @error('sale_date')
                is-invalid
            @enderror" name="sale_date" id="sale_date" aria-describedby="sale_dateHelper" placeholder="type a date" value="{{ old('sale_date' , $comic->sale_date) }}" />
            
            <small id="sale_dateHelper" class="form-text text-muted @error('sale_date')
                d-none
            @enderror">Type a sale date</small>
            @error('sale_date')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
        </div>

        {{-- type --}}
        <div class="mb-3">
            <label for="type" class="form-label">Product type</label>

            <input type="text" class="form-control @error('type')
                is-invalid
            @enderror" name="type" id="type" aria-describedby="typeHelper" placeholder="product type" value="{{ old('type' , $comic->type) }}"/>

            <small id="typeHelper" class="form-text text-muted @error('type')
                d-none
            @enderror">Product type</small>
            @error('type')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror

        </div>



        <button type="submit" class="btn btn-dark">Edit</button>


</form>
</div>

@endsection