@php
    $nav_links =[
[
    'text' => 'Home',
    'index' => 'home.index',
],
[
    'text' => 'Comics',
    'index' => 'comics.index',
],
// [
//     'text' => 'Dettagli',
//     'index' => 'details.index',
// ],
    ]
@endphp
<header>


<nav class="navbar navbar-expand-lg navbar-light bg-light border">
    <div class="container-fluid">
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 align-items-center">
          <div class="d-flex justify-content-center">
            <img src="{{asset('images/dc-logo.png')}}" alt="" class="w-50">
          </div>
            @foreach($nav_links as $link)
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route($link['index'])}}">{{$link['text']}}</a>
            </li>
            @endforeach
        </ul>
      </div>
    </div>
</nav>

<div class="container-fluid">
    <img src="{{asset('images/jumbotron.jpg')}}" class="jumbotron">
</div>

</header>