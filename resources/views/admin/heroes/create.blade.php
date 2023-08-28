@extends('layouts.app')

@section('content')

<h1>Crear nuevo heroe</h1>
<form action="{{route('heroes.store')}}" method="POST">

    @include('admin.heroes.form')


    <button type="submit" class="btn btn-primary">Crear</button>
</form>

@endsection