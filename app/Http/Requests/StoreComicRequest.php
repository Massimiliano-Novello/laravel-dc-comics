<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'titolo' => 'required|min:5|max:100',
            'descrizione' => 'required',
            'immagine' => 'required',
            'prezzo' => 'required|min:2|max:100',
            'serie' => 'required|min:2|max:100',
            'uscita' => 'required',
            'tipo' => 'required|min:3|max:100'
        ];
    }


    public function messages()
    {
        return [
            'titolo.required' => 'Il titolo deve essere lungo almeno 5 caratteri',
            'serie.required' => 'La serie deve essere obbligatoria',
        ];
    }
}
