<?php

namespace App\Models\formularios;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FromOdont
 * @package App\Modelsormularios\Formularios
 * @version May 24, 2020, 7:48 pm -05
 *
 * @property \App\Modelsormularios\Formularios\PAgenda $agenda
 * @property integer $paciente_id
 * @property integer $agenda_id
 * @property string $motivo_consulta
 * @property string $enfer_probl_actual
 * @property string $ap_alergia_antibiotico
 * @property string $ap_alergia_anestecia
 * @property string $ap_vih
 * @property string $ap_tuberculosis
 * @property string $ap_asma
 * @property string $ap_diabetes
 * @property string $ap_hipertension
 * @property string $ap_enf_cardiaca
 * @property string $ap_otros
 * @property string $sv_presion_arterial
 * @property string $sv_frecuencia_cardiaca
 * @property string $sv_temperatura
 * @property string $sv_frecuencia_respiratoria
 * @property string $ese_labios
 * @property string $ese_mejilla
 * @property string $ese_maxilar_superior
 * @property string $ese_maxilar_inferior
 * @property string $ese_lengua
 * @property string $ese_paladar
 * @property string $ese_piso
 * @property string $ese_orofaringe
 * @property string $ese_carrillos
 * @property string $ese_gland_salivales
 * @property string $ese_oro_faringe
 * @property string $ese_atm
 * @property string $ese_ganglios
 */
class FromOdont extends Model
{
    use SoftDeletes;

    public $table = 'form_odon';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'paciente_id',
        'agenda_id',
        'motivo_consulta',
        'enfer_probl_actual',
        'ap_alergia_antibiotico',
        'ap_alergia_anestecia',
        'ap_vih',
        'ap_tuberculosis',
        'ap_asma',
        'ap_diabetes',
        'ap_hipertension',
        'ap_enf_cardiaca',
        'ap_otros',
        'sv_presion_arterial',
        'sv_frecuencia_cardiaca',
        'sv_temperatura',
        'sv_frecuencia_respiratoria',
        'ese_labios',
        'ese_mejilla',
        'ese_maxilar_superior',
        'ese_maxilar_inferior',
        'ese_lengua',
        'ese_paladar',
        'ese_piso',
        'ese_orofaringe',
        'ese_carrillos',
        'ese_gland_salivales',
        'ese_oro_faringe',
        'ese_atm',
        'ese_ganglios'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'paciente_id' => 'integer',
        'agenda_id' => 'integer',
        'motivo_consulta' => 'string',
        'enfer_probl_actual' => 'string',
        'ap_alergia_antibiotico' => 'string',
        'ap_alergia_anestecia' => 'string',
        'ap_vih' => 'string',
        'ap_tuberculosis' => 'string',
        'ap_asma' => 'string',
        'ap_diabetes' => 'string',
        'ap_hipertension' => 'string',
        'ap_enf_cardiaca' => 'string',
        'ap_otros' => 'string',
        'sv_presion_arterial' => 'string',
        'sv_frecuencia_cardiaca' => 'string',
        'sv_temperatura' => 'string',
        'sv_frecuencia_respiratoria' => 'string',
        'ese_labios' => 'string',
        'ese_mejilla' => 'string',
        'ese_maxilar_superior' => 'string',
        'ese_maxilar_inferior' => 'string',
        'ese_lengua' => 'string',
        'ese_paladar' => 'string',
        'ese_piso' => 'string',
        'ese_orofaringe' => 'string',
        'ese_carrillos' => 'string',
        'ese_gland_salivales' => 'string',
        'ese_oro_faringe' => 'string',
        'ese_atm' => 'string',
        'ese_ganglios' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'paciente_id' => 'required',
        'agenda_id' => 'required',
        // 'motivo_consulta' => 'required',
        // 'enfer_probl_actual' => 'required',
        // 'ap_alergia_antibiotico' => 'required',
        // 'ap_alergia_anestecia' => 'required',
        // 'ap_vih' => 'required',
        // 'ap_tuberculosis' => 'required',
        // 'ap_asma' => 'required',
        // 'ap_diabetes' => 'required',
        // 'ap_hipertension' => 'required',
        // 'ap_enf_cardiaca' => 'required',
        // 'ap_otros' => 'required',
        // 'sv_presion_arterial' => 'required',
        // 'sv_frecuencia_cardiaca' => 'required',
        // 'sv_temperatura' => 'required',
        // 'sv_frecuencia_respiratoria' => 'required',
        // 'ese_labios' => 'required',
        // 'ese_mejilla' => 'required',
        // 'ese_maxilar_superior' => 'required',
        // 'ese_maxilar_inferior' => 'required',
        // 'ese_lengua' => 'required',
        // 'ese_paladar' => 'required',
        // 'ese_piso' => 'required',
        // 'ese_orofaringe' => 'required',
        // 'ese_carrillos' => 'required',
        // 'ese_gland_salivales' => 'required',
        // 'ese_oro_faringe' => 'required',
        // 'ese_atm' => 'required',
        // 'ese_ganglios' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function agenda()
    {
        return $this->belongsTo(\App\Models\agenda\Agenda::class, 'agenda_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function paciente()
    {
        return $this->belongsTo(\App\Models\maestros\M_paciente::class, 'paciente_id');
    }
}
