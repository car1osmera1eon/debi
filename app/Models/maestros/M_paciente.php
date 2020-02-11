<?php

namespace App\Models\maestros;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

/**
 * Class M_paciente
 * @package App\Models
 * @version February 8, 2020, 5:15 pm UTC
 *
 * @property \App\Models\MTipoIdentificacion idTipoentificacion
 * @property \App\Models\MPai pais
 * @property integer id
 * @property integer id_tipo_identificacion
 * @property string cedula
 * @property integer pais_id
 * @property string primernombre
 * @property string segundonombre
 * @property string primerapellido
 * @property string segundoapellido
 * @property string fecha_nacimiento
 * @property string lugar_nacimiento
 * @property integer edad
 * @property integer sexo
 * @property string lugar_inscripcion
 * @property string nombres_madre
 * @property string nombres_padre
 * @property string direccion
 * @property string localidad
 * @property string codigo_canton
 * @property string codigo_provincia
 * @property string codigo_parroquia
 * @property string observaciones
 * @property string telefono
 * @property string email
 */
class M_paciente extends Model
{
    use SoftDeletes;

    public $table = 'm_paciente';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_tipo_identificacion' => 'integer',
        'cedula' => 'string',
        'pais_id' => 'integer',
        'primernombre' => 'string',
        'segundonombre' => 'string',
        'primerapellido' => 'string',
        'segundoapellido' => 'string',
        'fecha_nacimiento' => 'date',
        'lugar_nacimiento' => 'string',
        'edad' => 'integer',
        'sexo' => 'integer',
        'lugar_inscripcion' => 'string',
        'nombres_madre' => 'string',
        'nombres_padre' => 'string',
        'direccion' => 'string',
        'localidad' => 'string',
        'codigo_canton' => 'string',
        'codigo_provincia' => 'string',
        'codigo_parroquia' => 'string',
        'observaciones' => 'string',
        'telefono' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cedula' => 'required|max:15|unique:m_paciente',
        'pais_id' => 'required',
        'primernombre' => 'required',
        'primerapellido' => 'required',
        'fecha_nacimiento' => 'required',  
        'sexo' => 'required', 
        'direccion' => 'required',
        'localidad' => 'required',
        'codigo_canton' => 'required',
        'codigo_provincia' => 'required',
        'codigo_parroquia' => 'required', 
        'telefono' => 'required',
        'email' => 'required|email'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipoIdentificacion()
    {
        return $this->belongsTo(\App\Models\maestros\M_tipo_identificacion::class, 'id_tipo_identificacion');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function pais()
    {
        return $this->belongsTo(\App\Models\maestros\M_pais::class, 'pais_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function provincia()
    {
        return $this->belongsTo(\App\Models\maestros\M_provincia::class, 'codigo_provincia', 'codigo_m_provincia');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function canton()
    {
        return $this->belongsTo(\App\Models\maestros\M_canton::class, 'codigo_canton', 'codigo_m_canton');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function parroquia()
    {
        return $this->belongsTo(\App\Models\maestros\M_parroquia::class, 'codigo_parroquia', 'codigo_m_parroquia');
    }

    public function getEntryDateAttribute($input)
    {
        return Carbon::createFromFormat('Y-m-d', $input)
        ->format(config('app.date_format'));
    }
}
