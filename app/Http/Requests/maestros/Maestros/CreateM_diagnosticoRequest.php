<?php

namespace App\Http\Requests\maestros\Maestros;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\maestros\Maestros\M_diagnostico;

class CreateM_diagnosticoRequest extends FormRequest
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
        return M_diagnostico::$rules;
    }
}
