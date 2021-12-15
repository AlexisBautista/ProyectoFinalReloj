<div>
    <div class="row">
        <div class="col-6 mx-auto">
            <div class="card text-center">
                <div class="card-tittle">
                    <h2>Informacion del reloj</h2>
                </div>
                <div class="card-header">
                    <img style="width:100px; height:125px" src="{{ Storage::disk('public')->url($reloj->foto) }}"
                        alt="">
                </div>
                <div class="card-body">
                    <h1>{{ $reloj->nombre }}</h1>
                    {{ $reloj->categoria }} , {{ $reloj->año }}
                    <h2 class="mt-5">${{ $reloj->precio }}</h2>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{ route('editrelojs', $reloj) }}" type="submit" class="btn btn-success">Editar</a>
                    <a href="{{ route('indexrelojs') }}" class="btn btn-danger">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
