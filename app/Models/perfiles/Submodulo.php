<?php

namespace App\Models\perfiles;

use Illuminate\Database\Eloquent\Model;

class Submodulo extends Model
{
    //

    public static function submodulos($id){
        return Submodulo::where('modulo_id', '=', $id)->get();
    }
}
