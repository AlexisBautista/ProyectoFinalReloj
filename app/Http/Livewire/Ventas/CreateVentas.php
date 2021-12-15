<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Reloj;
use App\Models\Usuario;
use App\Models\Venta;
use Livewire\Component;

class CreateVentas extends Component
{
    public Venta $venta;

    public function mount()
    {
        $this->venta = new Venta();
    }
    public function render()
    {
        $relojs = Reloj::all();
        $usuarios = Usuario::all();
        return view('livewire.ventas.create-ventas', compact('relojs', 'usuarios'));
    }

    public function crear()
    {
        $datos = $this->validate();
        if ($datos > 0) {
            $this->venta->save();
            return redirect(route('indexventas'));
        } else {
            $this->emit('ventavalidate', 'error, favor de seleccionar usuario y reloj');
        }
    }

    public function rules()
    {
        return rules::rulesventas();
    }
}
