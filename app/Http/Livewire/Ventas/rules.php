<?php

namespace App\Http\Livewire\Ventas;

class rules
{
    public static function rulesventas()
    {
        return [
            'venta.id_usuario' => 'required',
            'venta.id_reloj' => 'required'
        ];
    }
}
