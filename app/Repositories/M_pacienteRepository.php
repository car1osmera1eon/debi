<?php

namespace App\Repositories;

use App\Models\maestros\M_paciente;
use App\Repositories\BaseRepository;

/**
 * Class M_pacienteRepository
 * @package App\Repositories
 * @version February 8, 2020, 5:15 pm UTC
*/

class M_pacienteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'id_tipo_identificacion',
        'cedula',
        'pais_id',
        'primernombre',
        'segundonombre',
        'primerapellido',
        'segundoapellido',
        'fecha_nacimiento',
        'lugar_nacimiento',
        'edad',
        'sexo',
        'lugar_inscripcion',
        'nombres_madre',
        'nombres_padre',
        'direccion',
        'localidad',
        'codigo_canton',
        'codigo_provincia',
        'codigo_parroquia',
        'observaciones',
        'telefono',
        'email'
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
        return M_paciente::class;
    }
}
