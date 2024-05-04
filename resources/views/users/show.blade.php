@extends('layouts.app')

@section('title')
{{$comic['title']}}
@endsection

@section('content')
<div class="container">
    <h1 class="text-primary text-center">{{$comic['title']}}</h1>
    <p id="p-img" class="mt-2 text-center" ><img src="{{$comic['thumb']}}" alt="{{$comic['title']}}"></p>
</div>
@endsection

@section('style')
<style>
    h1 {
        text-shadow: 0 0 5px lightblue;
    }

    p#p-img img {
        width: 200px;
        height: 300px;
        filter: drop-shadow(0 0 10px black)
       
    }
</style>
@endsection