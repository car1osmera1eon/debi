<?php

namespace App\Models\maestros;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class M_categoria
 * @package App\Models\maestros
 * @version February 17, 2020, 10:55 am -05
 *
 * @property \Illuminate\Database\Eloquent\Collection mProductos
 * @property string nom_categoria
 * @property string descripcion
 */
class M_categoria extends Model
{
    use SoftDeletes;

    public $table = 'm_categoria';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nom_categoria',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nom_categoria' => 'string',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nom_categoria' => 'required',
        'descripcion' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function mProductos()
    {
        return $this->hasMany(\App\Models\maestros\MProducto::class, 'id_categoria');
    }
}
