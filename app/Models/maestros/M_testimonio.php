<?php

namespace App\Models\Maestros;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class M_testimonio
 * @package App\Models
 * @version June 14, 2020, 9:46 pm -05
 *
 * @property integer $clinica_id
 * @property integer $paciente_id
 * @property string $testimonio
 * @property string $image
 */
class M_testimonio extends Model
{
    use SoftDeletes;

    public $table = 'm_testimonio';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'clinica_id',
        'paciente_id',
        'testimonio',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'clinica_id' => 'integer',
        'paciente_id' => 'integer',
        'testimonio' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'clinica_id' => 'required',
        'paciente_id' => 'required',
        'testimonio' => 'required',
        'image' => 'required',
    ];

    
}
