@extends('layouts.default')

@section('titolo_pagina', 'Home Page Comics')

@section('content')
<div class="container m-auto row row-cols-1 row-cols-md-6 g-4">
    @foreach($lista_comics as $comic)
    <div class="col">
        <div class="card w-75" style="width: 18rem;">
            <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$comic['series']}}</h5>
            </div>
        </div>
    </div>
    @endforeach
<div>

</div>
</div>

@endsection