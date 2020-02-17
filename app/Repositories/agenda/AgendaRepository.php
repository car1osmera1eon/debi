<?php

namespace App\Repositories\agenda;

use App\Models\agenda\Agenda;
use App\Repositories\BaseRepository;

/**
 * Class AgendaRepository
 * @package App\Repositories
 * @version February 17, 2020, 10:16 am -05
*/

class AgendaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Agenda::class;
    }
}
