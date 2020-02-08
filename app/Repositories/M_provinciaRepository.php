<?php

namespace App\Repositories;

use App\Models\M_provincia;
use App\Repositories\BaseRepository;

/**
 * Class M_provinciaRepository
 * @package App\Repositories
 * @version February 8, 2020, 4:51 pm UTC
*/

class M_provinciaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo_m_provincia',
        'nombre_m_provincia',
        'codigo_nombre'
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
        return M_provincia::class;
    }
}
