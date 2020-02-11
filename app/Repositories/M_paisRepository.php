<?php

namespace App\Repositories;

use App\Models\maestros\M_pais;
use App\Repositories\BaseRepository;

/**
 * Class M_paisRepository
 * @package App\Repositories
 * @version February 8, 2020, 4:49 pm UTC
*/

class M_paisRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'name',
        'nom',
        'iso2',
        'iso3',
        'phone_code'
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
        return M_pais::class;
    }
}
