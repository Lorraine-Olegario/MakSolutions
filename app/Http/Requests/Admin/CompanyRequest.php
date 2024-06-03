<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            //
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes(): array
    {
        return [
            'cnpj'          => 'required|min:18|max:18',
            'social_reason' => 'required',
            'fantasy_name'  => 'required',
            'cep'           => 'required',
            'street'        => 'required',
            'number'        => 'required',
            'neighborhood'  => 'required',
            'municipality'  => 'required',
            'uf'            => 'required',
            'email_1'       => 'required',
            'telefone_1'    => 'required',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            //
        ];
    }
}
