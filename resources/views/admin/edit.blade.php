@extends('layouts.adminLayouts.create-edit')

@section('title' , 'Edit a comic')

@section('h1-content' , 'Edit a comic')

@section('form-head')


    <form action="{{route("comics.update" , $comic)}}" method="post" enctype="multipart/form-data">

@endsection

@section('method')

@method('PUT')

@endsection

@section('button' , 'Edit')