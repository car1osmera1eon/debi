<?php

namespace App\Models\perfiles;

use Illuminate\Database\Eloquent\Model;

class Sistema extends Model
{
    //
    public function perfil()
    {
        return $this->hasMany(\App\Models\perfiles\Perfil::class);
    }
}
