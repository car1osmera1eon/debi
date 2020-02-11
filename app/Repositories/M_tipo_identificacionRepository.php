<?php

namespace App\Repositories;

use App\Models\maestros\M_tipo_identificacion;
use App\Repositories\BaseRepository;

/**
 * Class M_tipo_identificacionRepository
 * @package App\Repositories
 * @version February 8, 2020, 4:22 pm UTC
*/

class M_tipo_identificacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipo_identificacion'
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
        return M_tipo_identificacion::class;
    }
}
