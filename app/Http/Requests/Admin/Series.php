<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class Series extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'season' => 'required',
            'number_epsode' => 'required',
            'name_epsode' => 'required',
            'duracion_epsode' => 'required',
            'lancament' => 'required',
            'description_epsode' => 'required',
            'url_link' => 'required'
        ];
    }
}
