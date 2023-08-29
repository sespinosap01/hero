@extends('layouts.app')

@section('content')

<div class="row">
    <h1>Sistema de Batallas</h1>
</div>

<div class="row text-center mt-3">
    <div class="col-5 bg-primary text-white">
        <h2>{{$heroName}}</h2>
    </div>
    <div class="col-2 bg-warning text-white">
        <h4>VS</h4>
    </div>
    <div class="col-5 bg-danger text-white">
        <h2>{{$enemyName}}</h2>
    </div>
</div>

<div class="row text-center mt-0">
    <div class="col-5 bg-primary text-white">
        <img src="{{asset('images/heroes/' . $heroAvatar)}}" width="50" height="50">
    </div>
    <div class="col-2 bg-warning text-white">
    </div>
    <div class="col-5 bg-danger text-white">
        <img src="{{asset('images/enemies/' . $enemyAvatar)}}" width="50" height="50">
    </div>
</div>

<div class="row text-center mt-2">
    <h3 class="text-center text-white bg-info">Eventos de Batalla</h3>
</div>

<div class="mt-3">
    @foreach ($events as $ev)
        <div  class="alert @if ($ev["winner"] == "hero") alert-success @else alert-danger @endif" role="alert">
            {{$ev["text"]}}
        </div>
    @endforeach
</div>


@endsection
