<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecommendationRequest extends FormRequest
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
            'song_name'=> ['required','string','max:50'],
            'artist'=> ['required','string','max:50'],
            'genre_id'=> ['required'],
            'song' => ['required', 'file', 'mimetypes:audio/mpeg, audio/mp3']
        ];
    }
}
