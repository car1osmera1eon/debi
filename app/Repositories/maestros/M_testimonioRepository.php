<?php

namespace App\Repositories\Maestros;

use App\Models\Maestros\M_testimonio;
use App\Repositories\BaseRepository;

/**
 * Class M_testimonioRepository
 * @package App\Repositories
 * @version June 14, 2020, 9:46 pm -05
*/

class M_testimonioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'clinica_id',
        'paciente_id',
        'testimonio',
        'image'
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
        return M_testimonio::class;
    }
}
