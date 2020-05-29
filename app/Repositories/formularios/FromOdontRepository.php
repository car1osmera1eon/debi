<?php

namespace App\Repositories\formularios;

use App\Models\formularios\FromOdont;
use App\Repositories\BaseRepository;

/**
 * Class FromOdontRepository
 * @package App\Repositories\formularios
 * @version May 24, 2020, 7:48 pm -05
*/

class FromOdontRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return FromOdont::class;
    }
}
