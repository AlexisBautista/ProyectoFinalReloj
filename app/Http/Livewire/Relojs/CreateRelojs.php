<?php

namespace App\Http\Livewire\Relojs;

use App\Models\Reloj;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateRelojs extends Component
{
    public Reloj $reloj;
    use WithFileUploads;
    public $foto;

    public function mount()
    {
        $this->reloj = new Reloj();
    }

    public function render()
    {
        return view('livewire.relojs.create-relojs');
    }

    public function create()
    {
        $this->validate();
        if ($this->foto != null) {
            $this->reloj->foto = Storage::disk('public')->put('images/relojs', $this->foto);
        }
        $this->reloj->save();
        return redirect(route('indexrelojs'));
    }
    protected function rules()
    {

        return rules::rulesreloj();
    }
}
