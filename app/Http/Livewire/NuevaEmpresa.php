<?php

namespace App\Http\Livewire;
use App\Models\Crud;
use Livewire\WithFileUploads;

use Livewire\Component;

class NuevaEmpresa extends Component
{
    use WithFileUploads;

    public $open = false;

    public $title, $razon_social, $nombre_comercial, $nit_o_id, $telefono, $correo, $sitio_web, $image, $identificador;

    
    public function mount(){
        $this->identificador = rand();
    }

    protected $rules = [
        'razon_social' => 'required',
        'nombre_comercial' => 'required',
        'nit_o_id' => 'required',
    ];

    public function save(){

        $this->validate();

        $image = $this->image->store('posts');


        Crud::create([
        'title'=>$this->title,
        'razon_social'=>$this->razon_social,
        'nombre_comercial'=>$this->nombre_comercial,
        'nit_o_id'=>$this->nit_o_id,
        'telefono'=>$this->telefono,
        'correo'=>$this->correo,
        'sitio_web'=>$this->sitio_web,
        'image' => $image

        ]);

        $this->reset(['open', 'razon_social', 'nombre_comercial', 'nit_o_id', 
        'telefono', 'correo', 'sitio_web', 'image']);

        $this->identificador = rand();

        return redirect('dashboard');
        $this->emitTo('alert', 'Se ha guardado la informacion');

    }

    public function render()
    {
        return view('livewire.nueva-empresa');
    }
}  
