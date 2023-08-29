@extends('layouts.app')

@section('content')

<h1>Editar item - {{$item->name}}</h1>
<form action="{{route('item.update', $item->id)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')

    @include('admin.items.form')

    <button type="submit" class="btn btn-warning">Editar Item</button>
</form>

@endsection