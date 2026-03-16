<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required|min:5',           
            'release_date' => 'required',
            'cast' => 'required',
            'genres' => 'required',
            'image' => 'required',
        ];
    }

    public function messages(): array 
    {
        return [
            'title.required' => 'judulnya harus diisi',
            'description.required' => 'sinopsis gak boleh kosong',
            'description.min' => 'sinopsi minimal 5 kata',
            'release_date.required' => 'Tahun  harus diisi',
            'cast.required' => 'cast harus diisi',
            'genres.required' => 'Genres harus diisi',
            'image.required' => 'Gambar harus diisi',
        ];
    }
}
