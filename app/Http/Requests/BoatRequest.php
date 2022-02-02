<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BoatRequest extends FormRequest
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
            'name' => 'required',
            'enrollment' => 'required',
            'brand_id' => 'required',
            'boat_type_id' => 'required',
            'shell' => 'required',
            'power' => 'required',
            'property_number' => 'required',
            'line' => 'required',
            'rpm' => 'required',
            'serial_number' => 'required',
            'helix' => 'required',
            'paw' => 'required'
        ];
    }

    /* Para personalizar el mensaje de validacion por cada campo
    public function attributes()
    {
        return [
            'name' => 'nombre de la embarcación'
        ];
    }*/
}
