<?php

namespace App\Models\maestros;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class M_diagnostico
 * @package App\Models\maestros\Maestros
 * @version June 6, 2020, 11:18 pm -05
 *
 * @property string $diag_codigo
 * @property string $diag_nombre
 * @property string $diag_valor
 * @property string $LSex
 * @property string $LInf
 * @property string $LSup
 * @property string $Triv
 * @property string $errad
 * @property string $N_inter
 * @property string $Nin
 * @property string $Ninmtobs
 * @property string $No_CBD
 * @property string $No_Aph
 * @property string $FETAL
 * @property integer $capitulo
 * @property string $Lista1
 * @property string $Grupo1
 * @property string $Lista5
 * @property string $ACTUALIZACIONES_CIE_10
 * @property string $year_modifi
 * @property integer $year_aplicacion
 * @property string $prinmorta
 * @property string $prinmorbi
 * @property string $lm_morbi
 * @property string $lm_morta
 * @property string $lgbd165
 * @property string $lOMSBeck
 * @property string $lgbd190
 * @property string $NOTDiaria
 * @property string $NOTSemanal
 * @property string $Sistema_Especial
 * @property string $birmm
 * @property string $poco_util
 * @property string $epi_morta
 * @property string $epi_morta_m5
 * @property string $diag_status
 * @property string $diag_local
 * @property string $diag_edad_estado
 * @property integer $diag_edad_ini
 * @property integer $diag_edad_fin
 * @property boolean $diag_esta_rd
 */
class M_diagnostico extends Model
{
    use SoftDeletes;

    public $table = 'm_diagnostico';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'diag_id' => 'integer',
        'diag_codigo' => 'string',
        'diag_nombre' => 'string',
        'diag_valor' => 'string',
        'LSex' => 'string',
        'LInf' => 'string',
        'LSup' => 'string',
        'Triv' => 'string',
        'errad' => 'string',
        'N_inter' => 'string',
        'Nin' => 'string',
        'Ninmtobs' => 'string',
        'No_CBD' => 'string',
        'No_Aph' => 'string',
        'FETAL' => 'string',
        'capitulo' => 'integer',
        'Lista1' => 'string',
        'Grupo1' => 'string',
        'Lista5' => 'string',
        'ACTUALIZACIONES_CIE_10' => 'string',
        'year_modifi' => 'string',
        'year_aplicacion' => 'integer',
        'prinmorta' => 'string',
        'prinmorbi' => 'string',
        'lm_morbi' => 'string',
        'lm_morta' => 'string',
        'lgbd165' => 'string',
        'lOMSBeck' => 'string',
        'lgbd190' => 'string',
        'NOTDiaria' => 'string',
        'NOTSemanal' => 'string',
        'Sistema_Especial' => 'string',
        'birmm' => 'string',
        'poco_util' => 'string',
        'epi_morta' => 'string',
        'epi_morta_m5' => 'string',
        'diag_status' => 'string',
        'diag_local' => 'string',
        'diag_edad_estado' => 'string',
        'diag_edad_ini' => 'integer',
        'diag_edad_fin' => 'integer',
        'diag_esta_rd' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'diag_codigo' => 'required',
        'diag_nombre' => 'required'
    ];

    
}
