<div>
    <div class="row">
        <div class="mx-auto col-md-4">
            <img class="mx-auto d-block" style="width: 140px; height:140px;"
                src="{{ Storage::disk('public')->url('images/usuarios/default.png') }}" alt="">
            <form wire:submit.prevent="login">
                <div class="mb-3">
                    <label class="form-label">Ingrese su correo electronico</label>
                    <input wire:model="email" type="email" class="form-control" placeholder="ejemplo@gmail.com">
                    {{-- @error('email')<b class="text-danger">{{ message }}</b>@enderror --}}
                </div>
                <div class="mb-3">
                    <label class="form-label">Ingrese su contraseña</label>
                    <input wire:model="password" type="password" class="form-control">
                    {{-- @error('password') <b class="text-danger">{{ message }}</b>@enderror --}}
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input">
                    <label class="form-check-label" for="exampleCheck1">Recordar</label>
                </div>
                <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
                <a href="{{ route('createUsuarios') }}" class="btn btn-secondary">Registrarse</a>
            </form>
        </div>
    </div>

</div>
