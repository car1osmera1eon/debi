<?php

namespace App\Repositories;

use App\Models\maestros\M_procedimiento;
use App\Repositories\BaseRepository;

/**
 * Class M_procedimientoRepository
 * @package App\Repositories
 * @version February 12, 2020, 1:06 pm -05
*/

class M_procedimientoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
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
        return M_procedimiento::class;
    }
}
