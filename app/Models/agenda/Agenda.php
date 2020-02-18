<?php

namespace App\Models\agenda;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Agenda
 * @package App\Models
 * @version February 17, 2020, 10:16 am -05
 *
 * @property \App\Models\MClinica clinica
 * @property \App\Models\MConsultorio consultorio
 * @property \App\Models\MMedico medico
 * @property \App\Models\Especialidad especialidad
 * @property \App\Models\MProcedimiento procedimiento
 * @property \App\Models\User usuarioconfirma
 * @property \App\Models\User usuariocrea
 * @property \App\Models\User usuariomod
 * @property string|\Carbon\Carbon fechaini
 * @property string|\Carbon\Carbon fechafin
 * @property integer paciente_id
 * @property integer medico_id
 * @property boolean proc_consul
 * @property integer consultorio_id
 * @property integer procedimiento_id
 * @property boolean tipo_cita
 * @property boolean estado_cita
 * @property integer clinica_id
 * @property integer reagenda_id
 * @property string observaciones
 * @property integer usuarioconfirma_id
 * @property integer especialidad_id
 * @property integer seguro_id
 * @property boolean estado
 * @property integer usuariocrea_id
 * @property integer usuariomod_id
 * @property string ip_creacion
 * @property string ip_modificacion
 * @property string observacion_proc
 * @property string diagnostico_proc
 */
class Agenda extends Model
{
    use SoftDeletes;

    public $table = 'p_agenda';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'fechaini',
        'fechafin',
        'paciente_id',
        'medico_id',
        'proc_consul',
        'consultorio_id',
        'procedimiento_id',
        'tipo_cita',
        'estado_cita',
        'clinica_id',
        'reagenda_id',
        'observaciones',
        'usuarioconfirma_id',
        'especialidad_id',
        'seguro_id',
        'estado',
        'usuariocrea_id',
        'usuariomod_id',
        'ip_creacion',
        'ip_modificacion',
        'observacion_proc',
        'diagnostico_proc'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fechaini' => 'datetime',
        'fechafin' => 'datetime',
        'paciente_id' => 'integer',
        'medico_id' => 'integer',
        'proc_consul' => 'boolean',
        'consultorio_id' => 'integer',
        'procedimiento_id' => 'integer',
        'tipo_cita' => 'boolean',
        'estado_cita' => 'boolean',
        'clinica_id' => 'integer',
        'reagenda_id' => 'integer',
        'observaciones' => 'string',
        'usuarioconfirma_id' => 'integer',
        'especialidad_id' => 'integer',
        'seguro_id' => 'integer',
        'estado' => 'boolean',
        'usuariocrea_id' => 'integer',
        'usuariomod_id' => 'integer',
        'ip_creacion' => 'string',
        'ip_modificacion' => 'string',
        'observacion_proc' => 'string',
        'diagnostico_proc' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fechaini' => 'required',
        'fechafin' => 'required',
        'paciente_id' => 'required',
        'medico_id' => 'required',
        'consultorio_id' => 'required',
        'clinica_id' => 'required',
        'estado' => 'required',
        'usuariocrea_id' => 'required',
        'usuariomod_id' => 'required',
        'created_at' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function paciente()
    {
        return $this->belongsTo(\App\Models\maestros\M_paciente::class, 'paciente_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function clinica()
    {
        return $this->belongsTo(\App\Models\maestros\M_clinica::class, 'clinica_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function consultorio()
    {
        return $this->belongsTo(\App\Models\maestros\M_consultorio::class, 'consultorio_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function medico()
    {
        return $this->belongsTo(\App\Models\maestros\M_medico::class, 'medico_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function especialidad()
    {
        return $this->belongsTo(\App\Models\maestros\Especialidad::class, 'especialidad_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function procedimiento()
    {
        return $this->belongsTo(\App\Models\maestros\M_procedimiento::class, 'procedimiento_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function usuarioconfirma()
    {
        return $this->belongsTo(\App\Models\User::class, 'usuarioconfirma_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function usuariocrea()
    {
        return $this->belongsTo(\App\Models\User::class, 'usuariocrea_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function usuariomod()
    {
        return $this->belongsTo(\App\Models\User::class, 'usuariomod_id');
    }
}
