<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RetourRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email',
            'type_activite' =>'required|string',
            'departement' => 'required|string',
            'date_activite' => 'required|date',
            'titre_du_retour' => 'required|string',
            'retour' => 'required|string',
            'suggestion' =>  'nullable|string',
            'niveau_pratique' => 'required|in:debutant,intermediaire,confirme,expert',
        ];
    }

    public function messages(): array
    {
        return [
            'nom.required' => 'Le nom est obligatoire.',
            'prenom.required' => 'Le prénom est obligatoire.',
            'email.required' => 'L\'adresse e-mail est obligatoire.',
            'email.email' => 'L\'adresse e-mail doit être une adresse e-mail valide.',
            'type_activite.required' => 'Le type d\'activité est obligatoire.',
            'departement.required' => 'Le département est obligatoire.',
            'date_activite.required' => 'La date de l\'activité est obligatoire.',
            'date_activite.date' => 'La date de l\'activité doit être une date valide.',
            'titre_du_retour.required' => 'Le titre du retour est obligatoire.',
            'retour.required' => 'Le retour est obligatoire.',
            'niveau_pratique.required' => 'Le niveau de pratique est obligatoire.',
            'niveau_pratique.in' => 'Le niveau de pratique doit être l\'une des valeurs suivantes : débutant, intermédiaire, confirmé, expert.',
        ];
    }
}
