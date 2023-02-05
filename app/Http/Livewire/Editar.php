<?php

namespace App\Http\Livewire;

use App\Models\Crud;
use Livewire\Component;
use Livewire\WithFileUploads;

class Editar extends Component
{
    use WithFileUploads;

    public $open = false;
    public $id_tercero, $image, $crud, $cruds, $identificador;

    

    protected $rules = [
        'razon_social' => 'required',
        'nombre_comercial' => 'required',
        'nit_o_id' => 'required',
    ];

    public function editar(Crud $id_tercero){
        // $this->id = $id;
        /* $cliente = Crud::find($id_tercero); */
        dd($id_tercero);
        $this->id_tercero=$id_tercero;
        $this->identificador = rand();
    }
    // public function edit(){
    //     $this->id_tercero=Crud::find($id_tercero);
    //     return view('public.empresa.editEmpresa')->with('edit', $id_tercero);
    // }
    public function save(){
        $this->validate();
        $this->crud->save();

        $this->reset(['open']);

        $this->emitTo('fcrud', 'render');

        $this->emit('alert', 'La informacion se ha actualizado correctamente.');
    }

    public function render()
    {
        return view('livewire.editar');
    }
}
