

@extends('layouts.default')

@section('titolo_pagina', 'Home Page Comics')

@section('content')
<div class="container-fluid bg-dark">
    <div class="container m-auto row row-cols-1 row-cols-md-6 g-4 grid-cards">
        @foreach($comics  as $comic)
        <a href="{{route('comics.details',['id' => 3])}}" class="d-flex flex-column text-decoration-none text-white">
            <div>
                <img src="{{$comic['thumb']}}" class="card-img-top my-img" alt="...">
            </div>
            <div>
                <h6 class="card-title">{{$comic['series']}}</h6>
            </div>
        </a>
        @endforeach
        <div>
        </div>
            
@endsection