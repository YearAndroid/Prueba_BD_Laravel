<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $table='usuario';
    protected $primarykey = 'id';
    public $timestamps = false;

    public $filables= [
        'nombre',
        'apellido',
        'telefono',
        'correo'
    ];
}
