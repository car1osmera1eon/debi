<?php

namespace App\Models\maestros;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class M_medico
 * @package App\Models
 * @version February 11, 2020, 11:25 am -05
 *
 * @property \App\Models\User usuario
 * @property \App\Models\Especialidad especialidad
 * @property integer usuario_id
 * @property integer especialidad_id
 * @property string registrosanitario
 * @property string registromedico
 * @property string registrosenecyt
 * @property integer estado
 */
class M_medico extends Model
{
    use SoftDeletes;

    public $table = 'm_medico';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'usuario_id',
        'especialidad_id',
        'registrosanitario',
        'registromedico',
        'registrosenecyt'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'usuario_id' => 'integer',
        'especialidad_id' => 'integer',
        'registrosanitario' => 'string',
        'registromedico' => 'string',
        'registrosenecyt' => 'string',
        'estado' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'usuario_id' => 'required',
        'especialidad_id' => 'required' 
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function usuario()
    {
        return $this->belongsTo(\App\User::class, 'usuario_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function especialidad()
    {
        return $this->belongsTo(\App\Models\maestros\Especialidad::class, 'especialidad_id');
    }
}
