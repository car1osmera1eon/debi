<?php

namespace App\Models\maestros;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class M_consultorio
 * @package App\Models
 * @version February 12, 2020, 1:08 pm -05
 *
 * @property string nombre
 * @property integer clinica_id
 * @property string observacion
 * @property boolean estado
 */
class M_consultorio extends Model
{
    use SoftDeletes;

    public $table = 'm_consultorio';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'clinica_id',
        'observacion',
        'estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'clinica_id' => 'integer',
        'observacion' => 'string',
        'estado' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'clinica_id' => 'required'
    ];

     /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function clinica()
    {
        return $this->belongsTo(\App\Models\maestros\M_clinica::class, 'clinica_id', 'id');
    }
    
}
