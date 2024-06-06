@extends('layouts.adminLayouts.create-edit')

@section('title' , 'create a comic')

@section('h1-content' , 'Create a comic')

@section('form-head')

    <form action="{{route("comics.store")}}" method="post" enctype="multipart/form-data">

@endsection

@section('button' , 'Create')