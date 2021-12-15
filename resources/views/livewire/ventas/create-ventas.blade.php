<div>
    <form wire:submit.prevent="crear">
        <div class="card">
            <div class="card-header">
                Nueva venta de reloj
            </div>
            <div class="card-body">
                @include('livewire.ventas.formulario')
            </div>
            <div class="card-footer text-center">
                <button wire:click="crear" type="submit" class="btn btn-success">Crear</button>
                <a href="{{ route('indexventas') }}" class="btn btn-danger">Regresar</a>
            </div>
        </div>




    </form>

</div>
