<?php

namespace App\Repositories;

use App\Models\Usuario;
use App\Repositories\BaseRepository;

/**
 * Class UsuarioRepository
 * @package App\Repositories
 * @version February 4, 2020, 2:53 pm UTC
*/

class UsuarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'identificacion',
        'name',
        'primernombre',
        'segundonombre',
        'primerapellido',
        'segundoapellido',
        'email',
        'password',
        'remember_token',
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
        return Usuario::class;
    }
}
