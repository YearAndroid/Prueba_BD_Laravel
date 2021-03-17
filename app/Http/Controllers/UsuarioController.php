<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class Usuario extends Controller
{
    //
    public function actualizar($id){
                DB::table('usuario')->where('usuario.id','=',$id)->actualizar([

            ]);
    }
    //sql insertar
    public function insertar(){
        DB::table('usuario')->insert([
            'id'=>1,
            'nombre'=>'Jesus',
            'apellido'=>'Hernandez',
            'telefono'=> '85201425',
            'correo'=> 'jesus@gmail.com'
        ]);
    }

    public function mostrar(){
        $usuario =DB::table('usuario')->first();
        foreach($usuario as $user)
        echo $user.nombre;
    }

    public function eliminar($id){
        DB::table('usuario')->where('usuario.id','=',$id)->delete();
 
    }

    public function create(){
        return view('create');
    }
}

