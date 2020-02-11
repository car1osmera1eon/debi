<?php

namespace App\Repositories;

use App\Models\maestros\M_parroquia;
use App\Repositories\BaseRepository;

/**
 * Class M_parroquiaRepository
 * @package App\Repositories
 * @version February 8, 2020, 4:52 pm UTC
*/

class M_parroquiaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo_canton',
        'codigo_m_parroquia',
        'nombre_m_parroquia',
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
        return M_parroquia::class;
    }
}
