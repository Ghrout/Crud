<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    use HasFactory;
    protected $fillable= ['razon_social', 'nombre_comercial', 'nit_o_id', 'telefono', 'correo', 'sitio_web', 'image', 'id_tercero'];
}
