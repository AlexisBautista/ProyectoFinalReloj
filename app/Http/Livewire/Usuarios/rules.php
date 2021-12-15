<?php

namespace App\Http\Livewire\Usuarios;

class rules
{
    public static function rulesUsuario($id = null)
    {
        $validar = ($id) ? 'nullable|min:4' : 'required|min:4';
        return [
            'usuario.nombre_usuario' => 'required',
            'usuario.email' => 'required|email',
            'password' => $validar,
            'foto' => 'nullable|image'
        ];
    }
}
