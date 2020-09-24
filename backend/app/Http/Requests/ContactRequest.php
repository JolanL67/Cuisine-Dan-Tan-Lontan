<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'phone' => [
                'required',
                'digits:10',
            ],
            'mail' => [
                'required',
                'max:100',
                'email',
            ],
            'facebook' => [
                'required',
                'max:255',
                'url',
            ],
            'instagram' => [
                'required',
                'max:255',
                'url',
            ],
        ];
    }

        /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'phone.required' => 'Le champ :attribute doit être renseigné',
            'phone.digits' => 'Le champ :attribute doit contenir :digits chiffres.',
            'mail.required' => 'Le champ :attribute doit être renseigné',
            'mail.max' => 'Le champ :attribute ne doit pas excéder :max caractères.',
            'mail.email' => 'Le champ :attribute doit être une adresse e-mail',
            'facebook.required' => 'Le champ :attribute doit être renseigné',
            'facebook.max' => 'Le champ :attribute ne doit pas excéder :max caractères.',
            'facebook.url' => 'Le champ :attribute doit être un lien',
            'instagram.required' => 'Le champ :attribute doit être renseigné',
            'instagram.max' => 'Le champ :attribute ne doit pas excéder :max caractères.',
            'instagram.url' => 'Le champ :attribute doit être un lien',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'phone' => 'Téléphone',
            'mail' => 'E-mail',
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
        ];
    }
}
