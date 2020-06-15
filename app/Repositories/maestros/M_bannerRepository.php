<?php

namespace App\Repositories\Maestros;

use App\Models\Maestros\M_banner;
use App\Repositories\BaseRepository;

/**
 * Class M_bannerRepository
 * @package App\Repositories\Maestros
 * @version June 14, 2020, 2:44 pm -05
*/

class M_bannerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion',
        'image',
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
        return M_banner::class;
    }
}
