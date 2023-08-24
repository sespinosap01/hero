@extends('layouts.app')

@section('content')

<h1>Crear nuevo enemigo</h1>
<form action="{{route('enemy.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Escribe un nombre..." required>
    </div>
    <div class="mb-3">
        <label for="hp" class="form-label">HP</label>
        <input type="number" class="form-control" id="hp" name="hp" placeholder="Escribe los puntos de vida..." required>
    </div>
    <div class="mb-3">
        <label for="atq" class="form-label">Ataque</label>
        <input type="number" class="form-control" id="atq" name="atq" placeholder="Escribe los puntos de ataque..." required>
    </div>
    <div class="mb-3">
        <label for="def" class="form-label">Defensa</label>
        <input type="number" class="form-control" id="def" name="def" placeholder="Escribe los puntos de defensa..." required>
    </div>
    <div class="mb-3">
        <label for="coins" class="form-label">Monedas</label>
        <input type="number" class="form-control" id="coins" name="coins" placeholder="Escribe la cantidad de monedas..." required>
    </div>
    <div class="mb-3">
        <label for="xp" class="form-label">Experiencia</label>
        <input type="number" class="form-control" id="xp" name="xp" placeholder="Escribe la experiencia..." required>
    </div>
    <button type="submit" class="btn btn-primary">Crear Enemigo</button>
</form>

@endsection