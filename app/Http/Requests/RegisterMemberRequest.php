<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterMemberRequest extends FormRequest
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
            "nom" => "required|alpha",
            "prenoms" => "required|alpha",
            "email" => "required|email",
            "telephone" => "required|numeric",
            "ville" => "required|alpha",
            "motDePasse" => "required|confirmed|min:6",
        ];
    }
}
