<?php

namespace App\Repositories\maestros;

use App\Models\maestros\M_sitio;
use App\Repositories\BaseRepository;

/**
 * Class M_sitioRepository
 * @package App\Repositories\maestros\Maestros
 * @version June 12, 2020, 4:18 pm -05
*/

class M_sitioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'clinica_id',
        'nombre_sitio',
        'mision',
        'vision',
        'quienes_somos',
        'facebook',
        'twitter',
        'instagram',
        'telegram',
        'whatsapp'
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
        return M_sitio::class;
    }
}
