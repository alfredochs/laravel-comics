

@extends('layouts.default')

@section('titolo_pagina', 'Home Page Comics')

@section('content')
<div class="container-fluid bg-dark">
    <div class="container m-auto row row-cols-1 row-cols-md-6 g-4 grid-cards">
        @foreach($comics  as $indice => $comic)
        {{-- metodo con indice preso dall foreach --}}
        {{-- <a href="{{route('comics.details',['id' => $indice])}}" class="d-flex flex-column text-decoration-none text-white"> --}}
        <a href="{{route('comics.details',['id' => $loop ->index])}}" class="d-flex flex-column text-decoration-none text-white">
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