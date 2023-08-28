@extends('layouts.app')

@section('content')

<h1>Editar heroe - {{$hero->name}}</h1>
<form action="{{route('heroes.update', $hero->id)}}" method="POST">
    @method('PUT')

    @include('admin.heroes.form')

    <button type="submit" class="btn btn-warning">Editar</button>
</form>

@endsection