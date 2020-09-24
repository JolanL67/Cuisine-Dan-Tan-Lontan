<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PresentationRequest extends FormRequest
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
            'description' => [
                'required',
                'max:2000',
            ],
            'thumbnail' => [
                'image',
                'mimes:jpeg,png,jpg,gif',
                'max:2048',
            ],
            'bg_image' => [
                'image',
                'mimes:jpeg,png,jpg,gif',
                'max:2048',
            ],
            'command_info' => [
                'required',
                'max:500',
            ],
            'payment_info' => [
                'required',
                'max:500',
            ]
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
            'description.required' => 'Le champ :attribute doit être renseigné',
            'description.max' => 'Le champ :attribute ne doit pas excéder :max caractères.',
            'thumbnail.image' => 'Le champ :attribute doit être une image ( jpeg, png, jpg, gif )',
            'thumbnail.mimes' => 'Le champ :attribute n\'accepte que les fichiers de type: :values.',
            'thumbnail.max' => 'Le champ :attribute ne doit pas excéder :max kilobytes.',
            'bg_image.image' => 'Le champ :attribute doit être une image ( jpeg, png, jpg, gif )',
            'bg_image.mimes' => 'Le champ :attribute n\'accepte que les fichiers de type: :values.',
            'bg_image.max' => 'Le champ :attribute ne doit pas excéder :max kilobytes.',
            'command_info.required' => 'Le champ :attribute doit être renseigné',
            'command_info.max' => 'Le champ :attribute ne doit pas excéder :max caractères.',
            'payment_info.required' => 'Le champ :attribute doit être renseigné',
            'payment_info.max' => 'Le champ :attribute ne doit pas excéder :max caractères.',
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
            'description' => 'Description',
            'thumbnail' => 'Image de présentation',
            'bg_image' => 'Image de fond',
            'command_info' => 'Info de commande',
            'payment_info' => 'Info de paiement',
        ];
    }
}
