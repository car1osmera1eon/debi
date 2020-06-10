<?php

namespace App\Models\maestros;

use Illuminate\Database\Eloquent\Model;

class FormOdonDiagPreDef extends Model
{
    //
    public $table = 'form_odon_diag_pre_def';

    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function diagnostico()
    {
        return $this->belongsTo(\App\Models\maestros\M_diagnostico::class, 'id_cie10', 'diag_id');
    }

}
