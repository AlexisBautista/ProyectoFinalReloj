<?php

namespace App\Http\Livewire\Relojs;

use App\Models\Reloj;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditRelojs extends Component
{
    use WithFileUploads;
    public Reloj $reloj;
    public $foto;

    public function render()
    {
        return view('livewire.relojs.edit-relojs');
    }

    public function edit(){
        $this->validate();
        if($this->foto != null){
            if($this->reloj->foto !=null){
                Storage::disk('public')->delete($this->reloj->foto);
            }
            $this->reloj->foto = Storage::disk('public')->put('images/relojs',$this->foto);
        }
        $this->reloj->save();
        return redirect(route('indexrelojs'));
    }
    protected function rules(){
        return rules::rulesreloj();
    }
}
