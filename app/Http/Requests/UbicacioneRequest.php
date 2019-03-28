<?php

namespace vcsweb\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UbicacioneRequest extends FormRequest
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
        return [
            'direccion'=>'required',
            'referencia'=>'required',
            'escena'=>'required'
        ];
    }
}
