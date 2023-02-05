<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Crud;

class Fcruds extends Component
{
    public $search, $sort, $direction;

    public function render()
    {

        $cruds = Crud::where('razon_social', 'like', '%' . $this->search . '%')
                            ->orwhere('nombre_comercial', 'like', '%' . $this->search . '%')
                            ->orwhere('nit_o_id', 'like', '%' . $this->search . '%')
                            ->orwhere('telefono', 'like', '%' . $this->search . '%')
                            ->orwhere('correo', 'like', '%' . $this->search . '%')
                            ->orwhere('sitio_web', 'like', '%' . $this->search . '%')
                            // ->orderBy($this->sort, $this->direction)
                            ->get();
        // dd($cruds);
        return view('livewire.fcruds', compact('cruds'));
    }
}
