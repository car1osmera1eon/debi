<?php

namespace App\Models\maestros;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class M_procedimiento
 * @package App\Models
 * @version February 12, 2020, 1:06 pm -05
 *
 * @property string nombre
 * @property string observacion
 * @property boolean estado
 */
class M_procedimiento extends Model
{
    use SoftDeletes;

    public $table = 'm_procedimiento';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'observacion',
        'tiempo',
        'costo',
        'estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'            => 'integer',
        'nombre'        => 'string',
        'observacion'   => 'string',
        'tiempo'        => 'string',
        'costo'         => 'float',
        'estado'        => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre'    => 'required',
        'tiempo'    => 'required',
        'costo'     => 'required',
    ];

    
}
