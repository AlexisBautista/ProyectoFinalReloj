<?php

namespace App\Http\Livewire\Relojs;

use App\Models\Reloj;
use Livewire\Component;

class ShowRelojs extends Component
{
    public Reloj $reloj;
    public function render()
    {
        return view('livewire.relojs.show-relojs');
    }
}
