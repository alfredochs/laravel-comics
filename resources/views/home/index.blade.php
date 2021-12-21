@extends('layouts.default')

@section('titolo_pagina', 'Comics Section')

@section('content')
<div class="container d-flex align-items-center g-4 w-75">
    <div>    
        <h2>ACTION COMICS #1000: THE DELUXE EDITION</h2>
        <div class="d-flex bg-danger w-50">
            <div>
                Prezzo
            </div>
            <div>
                Available
            </div>
            <div>
                Check Availability (freccia)
            </div>
        </div>
        <p>The celebration of 1.000 issues of Action Comics continues with a new, Deluxe Edition of the amazing
            comic that won raves when it hit comics shops in April! This hardcover includes all the stories from
    that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action
    Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by in
    Lee for Superman's new look, scripts for the stories, the original art from the lost story featuring art
    by Curt Swan and more! Plus: a complete reprint of the stories that started it all-the Superman
    stories Action Comics #1 and 2 from 1938!</p>

    </div>

    <div>
        <img src="{{asset('images/superman.jpg')}}" alt="">
    </div>
</div>
@endsection