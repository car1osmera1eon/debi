<?php

namespace App\Http\Requests\formularios;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\formularios\FromOdont;

class CreateFromOdontRequest extends FormRequest
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
        return FromOdont::$rules;
    }
}
