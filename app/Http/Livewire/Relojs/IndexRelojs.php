<?php

namespace App\Http\Livewire\Relojs;

use App\Models\Reloj;
use Livewire\Component;
use Livewire\WithPagination;

class IndexRelojs extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $cargado = false;

    public function render()
    {
        $relojs = ($this->cargado == true) ? Reloj::where('nombre', 'LIKE', '%' . $this->search . '%')
            ->orwhere('categoria', 'LIKE', '%' . $this->search . '%')
            ->orwhere('año', 'LIKE', '%' . $this->search . '%')
            ->orwhere('precio', 'LIKE', '%' . $this->search . '%')
            ->paginate(10) : [];
        return view('livewire.relojs.index-relojs', compact('relojs'));
    }

    public function cargando()
    {
        $this->cargado = true;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
