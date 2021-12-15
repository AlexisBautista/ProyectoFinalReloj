<div wire:init="cargando">

    <div class="row mb-3">
        <div class="col-3">
            <div class="input-group">
                <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
                <input wire:model="search" type="search" class="form-control" placeholder="Buscar..."
                    aria-labaria-describedby="addon-wrapping">
            </div>
        </div>
        <div class="col-9 ">
            <a href="{{ route('createrelojs') }}" class="btn btn-success float-right">Nuevo reloj a vender <iclass= fas
                    fa-plus-square>
                </iclass=></a>
        </div>
    </div>
    @if (count($relojs) > 0)

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Año</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($relojs as $reloj)


                    <tr>
                        <th scope="row">{{ $reloj->id }}</th>
                        <td><img style=" border-radius: 20px; width: 60px; height:110px"
                                src="{{ Storage::disk('public')->url($reloj->foto != null ? $reloj->foto : 'images/relojs/default.png') }}"
                                alt=""></td>
                        <td>{{ $reloj->nombre }}</td>
                        <td>{{ $reloj->categoria }}</td>
                        <td>{{ $reloj->año }}</td>
                        <td>${{ $reloj->precio }}</td>
                        <td>
                            <a title="Ver reloj" style="font-size: 1.3rem" class="text-info mr-1"
                                href="{{ route('showrelojs', $reloj) }}"><i class="fas fa-eye"></i></a>
                            <a title="Editar reloj" style="font-size: 1.3rem" class="text-warning mr-1"
                                href="{{ route('editrelojs', $reloj) }}"><i class="fas fa-edit"></i></a>
                            <a title="Eliminar reloj" style="font-size: 1.3rem" class="text-danger mr-1"
                                href="{{ route('deleterelojs', $reloj) }}"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @else
        <img class="d-block mx-auto" src="{{ Storage::disk('public')->url('images/otros/loading.gif') }}" alt="">

        <h2 class="text-center">Cargando...</h2>
    @endif
</div>
