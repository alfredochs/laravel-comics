@extends('layouts.default')

@section('titolo_pagina' , 'Dettagli')
@section('content')
<div class="container align-items-center my-3 w-50 d-flex ">
    <div class="">
        <img src="{{$comic['thumb']}}" alt="">
    </div>
    <div class="ps-4">
        <h5>{{$comic['title'] }}</h5>
        <div>
            <span><strong>Dettagli:</strong></span>
            <ul class="list-unstyled">
                <li>{{$comic['price']}}</li>
                <li>{{$comic['sale_date']}}</li>
                <li>{{$comic['type']}}</li>
            </ul>
        </div>
        <p>{{$comic['description']}}</p>
    </div>
</div>
    
@endsection
    