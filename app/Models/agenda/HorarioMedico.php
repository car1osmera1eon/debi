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
        'hora_ini',
        'hora_fin',
        'estado',
        'id_usuariocrea',
        'id_usuariomod',
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
        'medico_id' => 'integer',
        'ndia' => 'boolean',
        'dia' => 'string',
        'estado' => 'boolean',
        'id_usuariocrea' => 'string',
        'id_usuariomod' => 'string',
        'ip_creacion' => 'string',
        'ip_modificacion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'medico_id' => 'required',
        'ndia' => 'required',
        'dia' => 'required',
        'hora_ini' => 'required',
        'hora_fin' => 'required',
        'estado' => 'required',
        'id_usuariocrea' => 'required',
        'id_usuariomod' => 'required',
        'ip_creacion' => 'required',
        'ip_modificacion' => 'required'
    ];

    
}
