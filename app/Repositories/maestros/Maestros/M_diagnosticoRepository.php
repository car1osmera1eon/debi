<?php

namespace App\Repositories\maestros\Maestros;

use App\Models\maestros\Maestros\M_diagnostico;
use App\Repositories\BaseRepository;

/**
 * Class M_diagnosticoRepository
 * @package App\Repositories\maestros\Maestros
 * @version June 6, 2020, 11:18 pm -05
*/

class M_diagnosticoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'diag_codigo',
        'diag_nombre',
        'diag_valor',
        'LSex',
        'LInf',
        'LSup',
        'Triv',
        'errad',
        'N_inter',
        'Nin',
        'Ninmtobs',
        'No_CBD',
        'No_Aph',
        'FETAL',
        'capitulo',
        'Lista1',
        'Grupo1',
        'Lista5',
        'ACTUALIZACIONES_CIE_10',
        'year_modifi',
        'year_aplicacion',
        'prinmorta',
        'prinmorbi',
        'lm_morbi',
        'lm_morta',
        'lgbd165',
        'lOMSBeck',
        'lgbd190',
        'NOTDiaria',
        'NOTSemanal',
        'Sistema_Especial',
        'birmm',
        'poco_util',
        'epi_morta',
        'epi_morta_m5',
        'diag_status',
        'diag_local',
        'diag_edad_estado',
        'diag_edad_ini',
        'diag_edad_fin',
        'diag_esta_rd'
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
        return M_diagnostico::class;
    }
}
