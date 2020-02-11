<?php

namespace App\Models\maestros;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class M_tipo_identificacion
 * @package App\Models
 * @version February 8, 2020, 4:22 pm UTC
 *
 * @property string tipo_identificacion
 */
class M_tipo_identificacion extends Model
{
    use SoftDeletes;

    public $table = 'm_tipo_identificacion';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'tipo_identificacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tipo_identificacion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tipo_identificacion' => 'required',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
