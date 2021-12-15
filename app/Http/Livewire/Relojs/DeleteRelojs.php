<?php

namespace App\Http\Livewire\Relojs;

use App\Models\Reloj;
use Livewire\Component;
use Livewire\WithFileUploads;

class DeleteRelojs extends Component
{
    use WithFileUploads;

    public Reloj $reloj;
    public function render()
    {
        return view('livewire.relojs.delete-relojs');
    }

    public function delete(){
        $this->reloj->delete();
        return redirect(route('indexrelojs'));
    }
}
