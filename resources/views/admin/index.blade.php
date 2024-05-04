@extends('layouts.adminLayouts.app')

@section('title' , 'admin index')

@section('body-class', 'bg-light bg-gradient')

@section('content')


<h1 class="p-3 bg-dark text-white">Comics</h1>
<div class="container min-vh-100 py-5">
    <a class="btn btn-primary rounded-pill position-fixed bottom-0 end-0 m-3" href="{{route('comics.create')}}" role="button">
        <i class="fa fa-plus" aria-hidden="true"></i>
        <span>Add</span>
    </a>

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">title</th>
                    <th scope="col">thumb image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($comics as $comic )

                <tr class="">
                    <td scope="row">{{$comic->id}}</td>
                    <td>{{$comic->title ?? 'N/A'}}</td>
                    <td><img width="100" src="{{$comic->thumb}}" alt=""></td>
                    <td>
                        <a href="{{route('comics.show', $comic)}}">View</a>
                    </td>
                </tr>

                @empty

                <tr class="">
                    <td scope="row">nothing found here</td>
                </tr>

                @endforelse

            </tbody>
        </table>
    </div>




</div>



@endsection