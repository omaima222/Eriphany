<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
            'question' => ['required','string', 'max:100'],
            'option1' => ['required','string', 'max:50'],
            'option2' => ['required','string', 'max:50'],
            'option3' => ['required','string', 'max:50'],
            'option4' => ['required','string', 'max:50'],
            'genre1' => ['required','array'],
            'genre1.*' => ['integer'],
            'genre2' => ['required','array'],
            'genre2.*' => ['integer'],       
            'genre3' => ['required','array'],
            'genre3.*' => ['integer'],  
            'genre4' => ['required','array'],
            'genre4.*' => ['integer'],        
        ];
    }
}
