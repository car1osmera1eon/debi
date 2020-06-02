<?php

namespace App\Http\Requests\maestros;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\maestros\FormOdonDiagPaci;

class CreateFormOdonDiagPaciRequest extends FormRequest
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
        return FormOdonDiagPaci::$rules;
    }
}
