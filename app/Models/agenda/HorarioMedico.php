<?php

namespace App\Models\agenda;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class HorarioMedico
 * @package App\Models\agenda\Agenda
 * @version March 3, 2020, 12:38 pm -05
 *
 * @property integer medico_id
 * @property boolean ndia
 * @property string dia
 * @property time hora_ini
 * @property time hora_fin
 * @property boolean estado
 * @property string id_usuariocrea
 * @property string id_usuariomod
 * @property string ip_creacion
 * @property string ip_modificacion
 */
class HorarioMedico extends Model
{
    use SoftDeletes;

    public $table = 'p_horario_medico';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'medico_id',
        'ndia',
        'dia',
        'horaini',
        'horafin',
        'tipo',
        'estado',
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
        'id'                => 'integer',
        'medico_id'         => 'integer',
        'ndia'              => 'integer',
        'dia'               => 'string',
        'tipo'              => 'integer',
        'estado'            => 'boolean',
        'usuariocrea_id'    => 'string',
        'usuariomod_id'     => 'string',
        'ip_creacion'       => 'string',
        'ip_modificacion'   => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'medico_id' => 'required',
        'ndia'      => 'required', 
        'tipo'      => 'required', 
        'horaini'   => 'required',
        'horafin'   => 'required', 
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function medico()
    {
        return $this->belongsTo(\App\Models\maestros\M_medico::class, 'medico_id');
    }

    
}
