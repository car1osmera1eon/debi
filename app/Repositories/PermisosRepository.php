<?php

namespace App\Repositories;

use App\Models\Permisos;
use App\Repositories\BaseRepository;

/**
 * Class PermisosRepository
 * @package App\Repositories
 * @version February 5, 2020, 5:17 pm UTC
*/

class PermisosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'perfil_id',
        'usuario_id',
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
        return Permisos::class;
    }
}
