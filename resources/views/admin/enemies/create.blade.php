@extends('layouts.app')

@section('content')

<h1>Crear nuevo enemigo</h1>
<form action="{{route('enemy.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('admin.enemies.form')
    <button type="submit" class="btn btn-primary">Crear</button>
</form>

@endsection