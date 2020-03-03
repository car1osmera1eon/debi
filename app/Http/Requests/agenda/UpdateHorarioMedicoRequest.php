<?php

namespace App\Http\Requests\agenda;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\agenda\HorarioMedico;

class UpdateHorarioMedicoRequest extends FormRequest
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
        $rules = HorarioMedico::$rules;
        
        return $rules;
    }
}
