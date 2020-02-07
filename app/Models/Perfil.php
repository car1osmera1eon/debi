<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Perfil
 * @package App\Models
 * @version February 5, 2020, 2:49 am UTC
 *
 * @property \App\Models\Sistema sistema
 * @property \Illuminate\Database\Eloquent\Collection perfilAccions
 * @property \Illuminate\Database\Eloquent\Collection perfilUsuarios
 * @property integer sistema_id
 * @property string nom_perfil
 * @property integer estado
 */
class Perfil extends Model
{
    use SoftDeletes;

    public $table = 'perfils';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'sistema_id',
        'nom_perfil'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sistema_id' => 'integer',
        'nom_perfil' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'sistema_id' => 'required',
        'nom_perfil' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function sistema()
    {
        return $this->belongsTo(\App\Models\Sistema::class, 'sistema_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function perfilAccions()
    {
        return $this->hasMany(\App\Models\PerfilAccion::class, 'perfil_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function perfilUsuarios()
    {
        return $this->hasMany(\App\Models\PerfilUsuario::class, 'perfil_id');
    }
}
