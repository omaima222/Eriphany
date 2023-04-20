<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
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
            'song' => ['required','string', 'max:50'],
            'artist' => ['required','string', 'max:50'],
            'note' => ['required','string', 'max:100'],
            'ranking' => ['required','integer', 'max:5'],
        ];
    }
}
