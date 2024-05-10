@extends('layouts.app')

@section('title')
{{$comic->title}}
@endsection

@section('content')
<div class="container" style="padding-top: 5rem;">
    {{-- <h1 class="text-primary text-center">{{Route::currentRouteName()}}</h1> --}}
    <h1 class="text-primary text-center">{{$comic->title}}</h1>
    <div class="container">
        <div id="show_row" class="row">
            <div class="col-6 d-flex justify-content-end">
                <img width="200" height="300" src="{{$comic['thumb']}}" alt="{{$comic->title}}">
            </div>
            <div class="col-6">
                <p class="border-p">
                    <span>
                        <b>
                        Price: 
                        </b>
                    </span>
                    {{$comic->price}}
                </p>

                 <p class="border-p">
                    <span>
                        <b>
                        Series:  
                        </b>
                    </span>
                    {{$comic->series}}
                </p>

                <p class="border-p">
                    <span>
                        <b>
                        Sale date: 
                        </b>
                    </span>
                    {{$comic->sale_date}}
                </p>

                <p class="border-p">
                    <span>
                        <b>
                        Type: 
                        </b>
                    </span>
                    {{$comic->type}}
                </p>
            </div>
            <style>
            div#show_row {


                @media screen and (max-width: 450px)
                {

                & div:nth-child(1) {
                    > img {
                        width: 130px;
                        height: 200px;
                    }
                }

                & div:nth-child(2) {
                    & p {
                        font-size: x-small;
                        width: 80%;
                    }
                }
                }
            }

            .border-p {
                width: 40%;
                border-bottom: solid 1px black;
                padding-bottom: .5rem;
                font-size: medium;
            }

            p#p_description {
                @media screen and (max-width: 450px)
                {
                    font-size: small;
                }
            }
            </style>
        </div>
    </div>
    <p id="p_description" class="text-center my-3 p-2 border border-1">{{$comic->description}}</p>
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