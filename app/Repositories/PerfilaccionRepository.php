<?php

namespace App\Repositories;

use App\Models\Perfilaccion;
use App\Repositories\BaseRepository;

/**
 * Class PerfilaccionRepository
 * @package App\Repositories
 * @version February 6, 2020, 3:29 pm UTC
*/

class PerfilaccionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'perfil_id',
        'accion_id',
        'modulo_id',
        'submodulo_id',
        'submodulo2_id',
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
        return Perfilaccion::class;
    }
}
