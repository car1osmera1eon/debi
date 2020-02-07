<?php

namespace App\Repositories;

use App\Models\Especialidad;
use App\Repositories\BaseRepository;

/**
 * Class EspecialidadRepository
 * @package App\Repositories
 * @version February 3, 2020, 5:55 pm UTC
*/

class EspecialidadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion'
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
        return Especialidad::class;
    }
}
