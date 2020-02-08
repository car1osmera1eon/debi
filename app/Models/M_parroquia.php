<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class M_parroquia
 * @package App\Models
 * @version February 8, 2020, 4:52 pm UTC
 *
 * @property string codigo_canton
 * @property string codigo_m_parroquia
 * @property string nombre_m_parroquia
 * @property string codigo_nombre
 */
class M_parroquia extends Model
{
    use SoftDeletes;

    public $table = 'm_parroquia';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'codigo_canton',
        'codigo_m_parroquia',
        'nombre_m_parroquia',
        'codigo_nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_m_parroquia' => 'integer',
        'codigo_canton' => 'string',
        'codigo_m_parroquia' => 'string',
        'nombre_m_parroquia' => 'string',
        'codigo_nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'codigo_canton' => 'required',
        'codigo_m_parroquia' => 'required',
        'nombre_m_parroquia' => 'required',
        'codigo_nombre' => 'required'
    ];

    public static function parroquias($id){
        return M_parroquia::where('codigo_canton', '=', $id)->get();
    }

    
}
