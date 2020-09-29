<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
            'type' => [
                'required',
                'max:255',
                'in:Plats chaud,Accompagnements,Apéritif Créole,Gâteaux fait Maison,Boucherie,Nos sandwichs réunionnais',
            ],
            'name' => [
                'required',
                'max:255'
            ],
            'price' => [
                'required',
                'numeric',
            ],
            'ingredient' => [
                'max:255'
            ],
            'is_discount' => [
                'required',
                'boolean',
                'in:0, 1',
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
            'type.required' => 'Le champ :attribute doit être renseigné.',
            'type.max' => 'Le champ :attribute ne doit pas excéder :max caractères.',
            'type.in' => 'Le champ :attribute selectionné est invalide',
            'name.required' => 'Le champ :attribute doit être renseigné.',
            'price.required' => 'Le champ :attribute doit être renseigné.',
            'price.numeric' => 'Le champ :attribute doit être un nombre entier ou décimal (nombre décimal avec un point et non une virgule).',
            'is_discount.required' => 'Le champ :attribute doit être renseigné',
            'is_discount.boolean' => 'Le champ :attribute n\'accepte que 1 si il y a une remise, et 0 si il n\'y en a pas.',
            'is_discount.in' => 'Le champ :attribute selectionné est invalide',
            'nb_unit.integer' => 'Le champ :attribute doit être un nombre entier.',
            'discount_price.numeric' => 'Le champ :attribute doit être un nombre entier ou décimal (nombre décimal avec un point et non une virgule).',
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
            'type' => 'Type de plat',
            'name' => 'Nom du plat',
            'price' => 'Prix du plat',
            'ingredient' => 'Ingrédients',
            'is_discount' => 'Remise',
            'nb_unit' => 'Nombre remisé',
            'discount_price' => 'Prix de la remise',
        ];
    }
}
