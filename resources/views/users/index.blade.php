@extends('layouts.app')

@section('title')

index

@endsection

@section('body-class' , 'bg-dark bg-gradient')

@section('content')

<div id="jumbotron" >
</div>

<div id="cards-container" class="container" >
    {{-- <h1>content goes here</h1> --}}
    {{-- <span id="absolute" >current series</span> --}}
    <div id="cards-row" class="row">
        @foreach ($comics as $comic)
            <div id="col" class="col-lg-2 col-md-4 col-sm-6">
                <div id="col-wrapper" class="">
                    <div id="col-img" class="">
                        <img
                            src="{{$comic->thumb}}"
                            class="img-fluid rounded-top"
                            alt="{{$comic->title}}"
                        />  
                    </div>
                    {{-- test commit --}}
                    <div id="col-title" class="">
                        <p><a href="{{route('comics.show' , $comic)}}">{{$comic->title}}</a></p>
                        {{-- <p><a href="#">{{$comic['title']}}</a></p> --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>



@endsection