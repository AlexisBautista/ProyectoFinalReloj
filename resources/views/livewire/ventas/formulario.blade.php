<div class="mb-3">
    <label class="form-label">Usuario que adquiere el reloj</label>
    <select wire:model="venta.id_usuario" class="form-control">
        <option selected value='0'>Seleccionar Usuario</option>
        @foreach ($usuarios as $usuario)
            <option value="{{ $usuario->id }}">{{ $usuario->nombre_usuario }}</option>
        @endforeach

    </select>
    @error('venta.id_usuario') <h2>{{ $message }}</h2> @enderror
</div>
<div class="mb-3">
    <label class="form-label">Reloj</label>
    <select wire:model="venta.id_reloj" class="form-control">
        <option selected value="0">Seleccionar Reloj</option>
        @foreach ($relojs as $reloj)
            <option value="{{ $reloj->id }}">{{ $reloj->nombre }} - ${{ $reloj->precio }}</option>
        @endforeach
    </select>
    @error('venta.id_reloj') <h2>{{ $message }}</h2> @enderror
</div>
