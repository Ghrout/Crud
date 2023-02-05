<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Crud;

class EditarController extends Controller
{

    public function editar(Crud $id){
        // dd($id);
        return view('livewire.editar', compact('id'));
    }
}
