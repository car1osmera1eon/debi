<?php

namespace App\Repositories;

use App\Models\maestros\M_medico;
use App\Repositories\BaseRepository;

/**
 * Class M_medicoRepository
 * @package App\Repositories
 * @version February 11, 2020, 11:25 am -05
*/

class M_medicoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'usuario_id',
        'especialidad_id',
        'registrosanitario',
        'registromedico',
        'registrosenecyt',
        'estado'
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
        return M_medico::class;
    }
}
