<?php

namespace App\Models\Maestros;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class M_banner
 * @package App\Models\Maestros
 * @version June 14, 2020, 2:44 pm -05
 *
 * @property string $descripcion
 * @property string $image
 * @property integer $estado
 */
class M_banner extends Model
{
    use SoftDeletes;

    public $table = 'm_banner';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'descripcion',
        'image',
        'estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descripcion' => 'string',
        'image' => 'string',
        'estado' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descripcion' => 'required',
        'image' => 'required',
    ];

    
}
