<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Perfilaccion
 * @package App\Models
 * @version February 6, 2020, 3:29 pm UTC
 *
 * @property \App\Models\Accion accion
 * @property \App\Models\Perfil perfil
 * @property \App\Models\Submodulo2 submodulo2
 * @property \App\Models\Submodulo submodulo
 * @property integer perfil_id
 * @property integer accion_id
 * @property integer submodulo_id
 * @property integer submodulo2_id
 * @property integer estado
 */
class Perfilaccion extends Model
{
    use SoftDeletes;

    public $table = 'perfil_accions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'perfil_id',
        'accion_id',
        'modulo_id',
        'submodulo_id',
        'submodulo2_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'perfil_id' => 'integer',
        'accion_id' => 'integer',
        'modulo_id' => 'integer',
        'submodulo_id' => 'integer',
        'submodulo2_id' => 'integer',
        'estado' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'perfil_id' => 'required',
        'accion_id' => 'required',
        'modulo_id' => 'required',
        'submodulo_id' => 'required',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function accion()
    {
        return $this->belongsTo(\App\Accion::class, 'accion_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function perfil()
    {
        return $this->belongsTo(\App\Models\Perfil::class, 'perfil_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function submodulo2()
    {
        return $this->belongsTo(\App\Submodulo2::class, 'submodulo2_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function submodulo()
    {
        return $this->belongsTo(\App\Submodulo::class, 'submodulo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function modulo()
    {
        return $this->belongsTo(\App\Modulo::class, 'modulo_id');
    }
}
