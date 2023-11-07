<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class FormBlogRequest extends FormRequest
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
            'titre' => ['required', 'min:8'],
            'slug' => ['unique:posts', 'regex:/^[0-9a-z\-]+$/', Rule::unique('posts')->ignore($this->id)],
            'email' => ['required'],
            'contenu' => ['required', 'min:20']
        ];
    }

    // Transforme le titre en slug si le slug est vide
    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => $this->input('slug') ?: \Str::slug($this->input('titre'))
        ]);
    }
}
