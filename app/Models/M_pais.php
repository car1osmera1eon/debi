<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class M_pais
 * @package App\Models
 * @version February 8, 2020, 4:49 pm UTC
 *
 * @property string nombre
 * @property string name
 * @property string nom
 * @property string iso2
 * @property string iso3
 * @property string phone_code
 */
class M_pais extends Model
{
    use SoftDeletes;

    public $table = 'm_pais';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'name',
        'nom',
        'iso2',
        'iso3',
        'phone_code'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_m_pais' => 'integer',
        'nombre' => 'string',
        'name' => 'string',
        'nom' => 'string',
        'iso2' => 'string',
        'iso3' => 'string',
        'phone_code' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'name' => 'required',
        'nom' => 'required',
        'iso2' => 'required',
        'iso3' => 'required',
        'phone_code' => 'required'
    ];

    
}
