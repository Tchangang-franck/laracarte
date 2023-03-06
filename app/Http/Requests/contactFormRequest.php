<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class contactFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|min:3',
            'email'=>'required|email',
            'message'=>'required|min:10'
        ];
    }

    public function message(){
        return
        [
            'name.require'=>'vous devez entrer un nom',
            'name.min'=>'vous devez entrer un nom :min caractere',
            'email.require'=>'vous devez entrer une adresse email valide',
            'message.require'=>'vous devez entrer un message',
            'message.min'=>'vous devez entrer un message de :min caractere minimum'
            
        ];
    }
}
