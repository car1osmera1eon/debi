<?php

namespace App\Models\maestros;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class M_sitio
 * @package App\Models\maestros\Maestros
 * @version June 12, 2020, 4:18 pm -05
 *
 * @property integer $clinica_id
 * @property string $nombre_sitio
 * @property string $mision
 * @property string $vision
 * @property string $quienes_somos
 * @property string $facebook
 * @property string $twitter
 * @property string $instagram
 * @property string $telegram
 * @property string $whatsapp
 */
class M_sitio extends Model
{
    use SoftDeletes;

    public $table = 'm_sitio';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'clinica_id',
        'nombre_sitio',
        'mision',
        'vision',
        'quienes_somos',
        'facebook',
        'twitter',
        'instagram',
        'telegram',
        'whatsapp',
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
        'nombre_sitio' => 'string',
        'mision' => 'string',
        'vision' => 'string',
        'quienes_somos' => 'string',
        'facebook' => 'string',
        'twitter' => 'string',
        'instagram' => 'string',
        'telegram' => 'string',
        'whatsapp' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'mision' => 'required|max:350',
        'vision' => 'required|max:350',
        'quienes_somos' => 'required',
        'facebook' => 'max:150',
        'twitter' => 'max:150',
        'instagram' => 'max:150',
    ];

    
}
