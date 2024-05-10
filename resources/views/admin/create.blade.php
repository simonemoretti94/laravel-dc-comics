@extends('layouts.adminLayouts.app')

@section('title', 'create a new house')

@section('content')

<h1 class="p-3 bg-dark text-white">Create a new comic</h1>
<div class="container py-5">

    {{-- open error --}}

    @if($errors->any())

    <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)

        <li>{{ $error }}</li>
            
        @endforeach
    </ul>
    </div>
    @endif

    {{-- close error --}}

    <form action="{{route('comics.store')}}" method="post">
        @csrf

        {{-- title --}}
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title')
                is-invalid
            @enderror" name="title" id="title" aria-describedby="titleHelper" placeholder="title" value="{{ old('title') }}" />
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
            @enderror" name="description" id="description" rows="3">{{ old('description') }}</textarea>
             @error('description')
            <div class="alert alert-danger mt-1">
            {{$message}}
            </div>
            @enderror
        </div>

        {{-- thumbnail path --}}
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" class="form-control @error('thumb')
                is-invalid
            @enderror" name="thumb" id="thumb" aria-describedby="thumbHelper" placeholder="thumb path" value="{{ old('thumb') }}" />
            <small id="thumbHelper" class="form-text text-muted @error('thumb')
                d-none
            @enderror">Type a path</small>
             @error('thumb')
            <div class="alert alert-danger mt-1">
            {{$message}}
            </div>
            @enderror
        </div>

        {{-- price --}}
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" class="form-control" name="price" id="price" aria-describedby="priceHelper" placeholder="example: 10.99" value="{{ old('price') }}" />
            <small id="priceHelper" class="form-text text-muted">Type the price</small>
        </div>

        {{-- series --}}
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelper" placeholder="series" value="{{ old('series') }}" />
            <small id="seriesHelper" class="form-text text-muted">Type a serie name</small>
        </div>

        {{-- sale date --}}
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="sale_dateHelper" placeholder="type a date" value="{{ old('sale_date') }}" />
            <small id="sale_dateHelper" class="form-text text-muted">Type a sale date</small>
        </div>

        {{-- type --}}
        <div class="mb-3">
            <label for="type" class="form-label">Product type</label>
            <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelper" placeholder="product type" value="{{ old('type') }}"/>
            <small id="typeHelper" class="form-text text-muted">Product type</small>
        </div>



        <button type="submit" class="btn btn-dark">Create</button>



    </form>
</div>


@endsection