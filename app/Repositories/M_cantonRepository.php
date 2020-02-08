<?php

namespace App\Repositories;

use App\Models\M_canton;
use App\Repositories\BaseRepository;

/**
 * Class M_cantonRepository
 * @package App\Repositories
 * @version February 8, 2020, 4:52 pm UTC
*/

class M_cantonRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo_provincia',
        'codigo_m_canton',
        'nombre_m_canton',
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
        return M_canton::class;
    }
}
