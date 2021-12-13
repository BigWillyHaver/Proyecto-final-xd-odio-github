<?php

namespace App\Http\Livewire\Usuarios;

class RulesUsuario
{

    public static function reglas($id=null){
        return[
                'usuario.nombre_usuario' => 'required|string',
                'usuario.email' => 'email|required|unique:usuarios,email, ' .$id,
                'foto'=>'nullable|image',
                'password' => 'nullable|min:8',
                'confirmar_password'=>'same:password'

            ];
    }
}
