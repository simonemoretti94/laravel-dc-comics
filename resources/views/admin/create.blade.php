@extends('layouts.adminLayouts.app')

@section('title', 'create a new house')

@section('content')

<h1 class="p-3 bg-dark text-white">Create a new comic</h1>
<div class="container py-5">


    <form action="{{route('comics.store')}}" method="post">
        @csrf

        {{-- title --}}
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper" placeholder="title" />
            <small id="refCodeHelper" class="form-text text-muted">Type a title</small>
        </div>

        {{-- description --}}
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>

        {{-- thumbnail path --}}
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelper" placeholder="thumb path" />
            <small id="thumbHelper" class="form-text text-muted">Type a path</small>
        </div>

        {{-- price --}}
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" class="form-control" name="price" id="price" aria-describedby="priceHelper" placeholder="example: 10.99" />
            <small id="priceHelper" class="form-text text-muted">Type the price</small>
        </div>

        {{-- series --}}
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelper" placeholder="series" />
            <small id="seriesHelper" class="form-text text-muted">Type a serie name</small>
        </div>

        {{-- sale date --}}
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="sale_dateHelper" placeholder="type a date" />
            <small id="sale_dateHelper" class="form-text text-muted">Type a sale date</small>
        </div>

        {{-- type --}}
        <div class="mb-3">
            <label for="type" class="form-label">Product type</label>
            <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelper" placeholder="product type" />
            <small id="typeHelper" class="form-text text-muted">Product type</small>
        </div>



        <button type="submit" class="btn btn-dark">Create</button>



    </form>
</div>


@endsection