<?php

namespace App\Http\Requests\maestros;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\maestros\M_sitio;

class UpdateM_sitioRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = M_sitio::$rules;
        
        return $rules;
    }
}
