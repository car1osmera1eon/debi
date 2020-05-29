<?php

namespace App\Repositories\agenda;

use App\Models\agenda\HorarioMedico;
use App\Repositories\BaseRepository;

/**
 * Class HorarioMedicoRepository
 * @package App\Repositories\agenda\Agenda
 * @version March 3, 2020, 12:38 pm -05
*/

class HorarioMedicoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return HorarioMedico::class;
    }
}
