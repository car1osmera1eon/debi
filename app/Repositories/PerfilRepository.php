<?php

namespace App\Repositories;

use App\Models\Perfil;
use App\Repositories\BaseRepository;

/**
 * Class PerfilRepository
 * @package App\Repositories
 * @version February 5, 2020, 2:49 am UTC
*/

class PerfilRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'sistema_id',
        'nom_perfil'
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
        return Perfil::class;
    }
}
