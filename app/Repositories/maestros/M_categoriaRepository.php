<?php

namespace App\Repositories\maestros;

use App\Models\maestros\M_categoria;
use App\Repositories\BaseRepository;

/**
 * Class M_categoriaRepository
 * @package App\Repositories\maestros
 * @version February 17, 2020, 10:55 am -05
*/

class M_categoriaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom_categoria',
        'descripcion'
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
        return M_categoria::class;
    }
}
