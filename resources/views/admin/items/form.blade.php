@csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" @isset($item) value="{{$item->name}}" @endisset placeholder="Escribe un nombre..." required>
    </div>
    <div class="mb-3">
        <label for="hp" class="form-label">HP</label>
        <input type="number" class="form-control" id="hp" name="hp" @isset($item) value="{{$item->hp}}" @endisset placeholder="Escribe los puntos de vida..." required>
    </div>
    <div class="mb-3">
        <label for="atq" class="form-label">Ataque</label>
        <input type="number" class="form-control" id="atq" name="atq" @isset($item) value="{{$item->atq}}" @endisset placeholder="Escribe los puntos de ataque..." required>
    </div>
    <div class="mb-3">
        <label for="def" class="form-label">Defensa</label>
        <input type="number" class="form-control" id="def" name="def" @isset($item) value="{{$item->def}}" @endisset placeholder="Escribe los puntos de defensa..." required>
    </div>
    <div class="mb-3">
        <label for="luck" class="form-label">Suerte</label>
        <input type="number" class="form-control" id="luck" name="luck" @isset($item) value="{{$item->luck}}" @endisset placeholder="Escribe los puntos de suerte..." required>
    </div>
    <div class="mb-3">
        <label for="cost" class="form-label">Precio</label>
        <input type="number" class="form-control" id="cost" name="cost" @isset($item) value="{{$item->cost}}" @endisset placeholder="Escribe el precio..." required>
    </div>
