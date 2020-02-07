<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submodulo2 extends Model
{
    //
    public static function submodulos2($id){
        return Submodulo2::where('submodulo_id', '=', $id)->get();
    }
}
