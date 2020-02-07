<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Usuario
 * @package App\Models
 * @version February 4, 2020, 2:53 pm UTC
 *
 * @property string identificacion
 * @property string name
 * @property string primernombre
 * @property string segundonombre
 * @property string primerapellido
 * @property string segundoapellido
 * @property string email
 * @property string password
 * @property string remember_token
 */
class Usuario extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'identificacion',
        'name',
        'primernombre',
        'segundonombre',
        'primerapellido',
        'segundoapellido',
        'email',
        'password',
        'remember_token',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identificacion' => 'string',
        'name' => 'string',
        'primernombre' => 'string',
        'segundonombre' => 'string',
        'primerapellido' => 'string',
        'segundoapellido' => 'string',
        'email' => 'string',
        'password' => 'string',
        'remember_token' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'identificacion' => 'required', 
        'primernombre' => 'required',
        'primerapellido' => 'required',
        'email' => 'required',
        'password' => 'required'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function perfil()
    {
        return $this->hasMany(\App\Models\Perfil::class);
    }

    
}
