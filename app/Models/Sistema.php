<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sistema extends Model
{
    //
    public function perfil()
    {
        return $this->hasMany(\App\Models\Perfil::class);
    }
}
