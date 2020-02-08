<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class M_provincia
 * @package App\Models
 * @version February 8, 2020, 4:51 pm UTC
 *
 * @property string codigo_m_provincia
 * @property string nombre_m_provincia
 * @property string codigo_nombre
 */
class M_provincia extends Model
{
    use SoftDeletes;

    public $table = 'm_provincia';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'codigo_m_provincia',
        'nombre_m_provincia',
        'codigo_nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_m_provincia' => 'integer',
        'codigo_m_provincia' => 'string',
        'nombre_m_provincia' => 'string',
        'codigo_nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'codigo_m_provincia' => 'required',
        'nombre_m_provincia' => 'required',
        'codigo_nombre' => 'required'
    ];

    
}
