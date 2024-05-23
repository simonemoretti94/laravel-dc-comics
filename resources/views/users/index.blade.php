@extends('layouts.app')

@section('title')

index

@endsection

@section('body-class' , 'bg-dark bg-gradient')

@section('content')

<div id="jumbotron">
</div>

<div id="cards-container" class="container" >
    {{-- <h1>content goes here</h1> --}}
    {{-- <span id="absolute" >current series</span> --}}
    <div id="cards-row" class="row">
        @foreach ($comics as $comic)
            <div id="col" class="col-sm-6 col-md-4 col-lg-2 col-xl-2 col-xxl-2 ">
                <div id="col-wrapper" class="">
                    <div id="col-img" class="">
                        @if(Str::startsWith($comic->thumb , 'https://'))
                        <img id="thumb_img" src="{{$comic->thumb}}" alt="{{$comic->title}}" class="img-fluid rounded-top">
                        @else
                            <img id="thumb_img" src="{{asset('storage/' . $comic->thumb)}}" alt="{{$comic->title}}" class="img-fluid rounded-top">
                        @endif
                    </div>
                    {{-- test commit --}}
                    <div id="col-title" class="">
                        <p><a href="{{route('comics.show' , $comic)}}">{{$comic->title}}</a></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>



@endsection