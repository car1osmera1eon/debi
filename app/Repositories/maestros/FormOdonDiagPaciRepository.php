<?php

namespace App\Repositories\maestros\Maestros;

use App\Models\maestros\FormOdonDiagPaci;
use App\Repositories\BaseRepository;

/**
 * Class FormOdonDiagPaciRepository
 * @package App\Repositories\maestros\Maestros
 * @version May 29, 2020, 6:34 pm -05
*/

class FormOdonDiagPaciRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return FormOdonDiagPaci::class;
    }
}
