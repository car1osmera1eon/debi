<?php

namespace App\Repositories;

use App\Models\M_clinica;
use App\Repositories\BaseRepository;

/**
 * Class M_clinicaRepository
 * @package App\Repositories
 * @version February 10, 2020, 2:43 pm -05
*/

class M_clinicaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ruc',
        'razonsocial',
        'nombrecomercial',
        'nombre_corto',
        'codigo_provincia',
        'direccion',
        'email',
        'telefono1',
        'telefono2',
        'logo',
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
        return M_clinica::class;
    }
}
