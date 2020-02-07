<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Permisos
 * @package App\Models
 * @version February 5, 2020, 5:17 pm UTC
 *
 * @property \App\Models\Perfil perfil
 * @property \App\Models\User usuario
 * @property integer perfil_id
 * @property integer usuario_id
 * @property integer estado
 */
class Permisos extends Model
{
    use SoftDeletes;

    public $table = 'perfil_usuarios';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'perfil_id',
        'usuario_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'perfil_id' => 'integer',
        'usuario_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'perfil_id' => 'required',
        'usuario_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function perfil()
    {
        return $this->belongsTo(\App\Perfil::class, 'perfil_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function usuario()
    {
        return $this->belongsTo(\App\User::class, 'usuario_id');
    }
}
