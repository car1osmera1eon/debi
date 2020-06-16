<?php

namespace App\Models\maestros;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class M_clinica
 * @package App\Models
 * @version February 10, 2020, 2:43 pm -05
 *
 * @property string ruc
 * @property string razonsocial
 * @property string nombrecomercial
 * @property string nombre_corto
 * @property string provincia_id
 * @property string direccion
 * @property string email
 * @property string telefono1
 * @property string telefono2
 * @property string logo
 * @property boolean estado
 */
class M_clinica extends Model
{
    use SoftDeletes;

    public $table = 'm_clinica';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
        'logo_inicio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ruc' => 'string',
        'razonsocial' => 'string',
        'nombrecomercial' => 'string',
        'nombre_corto' => 'string',
        'codigo_provincia' => 'string',
        'direccion' => 'string',
        'email' => 'string',
        'telefono1' => 'string',
        'telefono2' => 'string',
        'logo' => 'string',
        'logo_inicio' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ruc' => 'required',
        'razonsocial' => 'required',
        'nombrecomercial' => 'required',
        'direccion' => 'required',
        'email' => 'required',
        'telefono1' => 'required', 
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function provincia()
    {
        return $this->belongsTo(\App\Models\maestros\M_provincia::class, 'codigo_provincia', 'codigo_m_provincia');
    }
    
}
