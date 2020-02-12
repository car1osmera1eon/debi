<?php

namespace App\Repositories;

use App\Models\maestros\M_consultorio;
use App\Repositories\BaseRepository;

/**
 * Class M_consultorioRepository
 * @package App\Repositories
 * @version February 12, 2020, 1:08 pm -05
*/

class M_consultorioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'clinica_id',
        'observacion',
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
        return M_consultorio::class;
    }
}
