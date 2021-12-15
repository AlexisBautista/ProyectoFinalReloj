<?php

namespace App\Http\Livewire\Relojs;

class rules
{
    public static function rulesreloj(){
        return [
            'reloj.nombre'=> 'required',
            'reloj.categoria'=> 'required',
            'reloj.año'=>'required|numeric',
            'reloj.precio'=>'required|numeric',
            'foto'=>'nullable|image'
            ];
    }

}
