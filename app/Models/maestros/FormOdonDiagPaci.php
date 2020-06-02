<?php

namespace App\Models\maestros;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FormOdonDiagPaci
 * @package App\Models\maestros\Maestros
 * @version May 29, 2020, 6:34 pm -05
 *
 * @property \App\Models\maestros\Maestros\FormOdon $formOdon
 * @property \App\Models\maestros\Maestros\FromOdonTipoDiag $tipoDiag
 * @property \App\Models\maestros\Maestros\User $usuariocrea
 * @property \App\Models\maestros\Maestros\User $usuariomod
 * @property integer $form_odon_id
 * @property integer $paciente_id
 * @property integer $tipo_diag_id
 * @property string $diagnostico
 * @property integer $usuariocrea_id
 * @property integer $usuariomod_id
 * @property string $ip_creacion
 * @property string $ip_modificacion
 */
class FormOdonDiagPaci extends Model
{
    use SoftDeletes;

    public $table = 'form_odon_diag_paci';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'form_odon_id',
        'paciente_id',
        'tipo_diag_id',
        'diagnostico',
        'usuariocrea_id',
        'usuariomod_id',
        'ip_creacion',
        'ip_modificacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'form_odon_id' => 'integer',
        'paciente_id' => 'integer',
        'tipo_diag_id' => 'integer',
        'diagnostico' => 'string',
        'usuariocrea_id' => 'integer',
        'usuariomod_id' => 'integer',
        'ip_creacion' => 'string',
        'ip_modificacion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'form_odon_id' => 'required',
        'paciente_id' => 'required',
        'tipo_diag_id' => 'required',
        'diagnostico' => 'required',
        'usuariocrea_id' => 'required',
        'usuariomod_id' => 'required',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function formOdon()
    {
        return $this->belongsTo(\App\Models\formularios\FormOdon::class, 'form_odon_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipoDiag()
    {
        return $this->belongsTo(\App\Models\maestros\FromOdonTipoDiag::class, 'tipo_diag_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function usuariocrea()
    {
        return $this->belongsTo(\App\User::class, 'usuariocrea_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function usuariomod()
    {
        return $this->belongsTo(\App\User::class, 'usuariomod_id');
    }
}
