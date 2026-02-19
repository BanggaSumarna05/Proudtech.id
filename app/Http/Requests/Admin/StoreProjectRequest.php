<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'overview' => 'nullable|string|max:500',
            'description' => 'nullable|string',
            'features' => 'nullable|string',
            'tech_stack' => 'nullable|string',
            'type' => 'required|in:client,internal',
            'client_name' => 'nullable|string|max:255',
            'project_url' => 'nullable|url|max:255',
            'thumbnail' => 'nullable|image|max:2048',
            'images.*' => 'nullable|image|max:2048',
            'is_published' => 'nullable|boolean',
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge(['is_published' => $this->has('is_published')]);
    }
}
