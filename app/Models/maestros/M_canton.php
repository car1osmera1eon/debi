<?php

namespace App\Models\maestros;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class M_canton
 * @package App\Models
 * @version February 8, 2020, 4:52 pm UTC
 *
 * @property string codigo_provincia
 * @property string codigo_m_canton
 * @property string nombre_m_canton
 * @property string codigo_nombre
 */
class M_canton extends Model
{
    use SoftDeletes;

    public $table = 'm_canton';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'codigo_provincia',
        'codigo_m_canton',
        'nombre_m_canton',
        'codigo_nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_m_canton' => 'integer',
        'codigo_provincia' => 'string',
        'codigo_m_canton' => 'string',
        'nombre_m_canton' => 'string',
        'codigo_nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'codigo_provincia' => 'required',
        'codigo_m_canton' => 'required',
        'nombre_m_canton' => 'required',
        'codigo_nombre' => 'required'
    ];

    public static function cantones($id){
        return M_canton::where('codigo_provincia', '=', $id)->get();
    }

    
}
