<?php

namespace App\Http\Requests\Maestros;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Maestros\M_testimonio;

class UpdateM_testimonioRequest extends FormRequest
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
        $rules = M_testimonio::$rules;
        
        return $rules;
    }
}
