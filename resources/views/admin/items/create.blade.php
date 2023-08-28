@extends('layouts.app')

@section('content')

<h1>Crear nuevo item</h1>
<form action="{{route('item.store')}}" method="POST">

    @include('admin.items.form')

    <button type="submit" class="btn btn-primary">Crear item</button>
</form>

@endsection