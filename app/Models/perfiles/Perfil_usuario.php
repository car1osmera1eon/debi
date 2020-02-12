<?php

namespace App\Models\perfiles;

use Illuminate\Database\Eloquent\Model;

class Perfil_usuario extends Model
{
    //
    
    public static function getPerfilUsuario($usuario_id)
    {
        $arr_perfil = array();
        $perfiles = Perfil_usuario::where('usuario_id', '=', $usuario_id)
                    ->join('perfils', 'perfil_usuarios.perfil_id', 'perfils.id') 
                    ->where('perfil_usuarios.estado',  '<>', 0)
                    ->where('perfils.estado', '<>', 0)  
                    ->select('perfils.id', 'perfils.abr_perfil')
                    ->get(); 
        foreach($perfiles as $perfil){
            $arr_perfil[$perfil->id] = $perfil->abr_perfil; 
        }
        return $arr_perfil;
    }
}
