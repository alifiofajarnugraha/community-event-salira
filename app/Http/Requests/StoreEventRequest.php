<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'subtitle' => ['nullable', 'string', 'max:255'],
            'community_id' => ['nullable', 'string', 'max:255'],
            'community_name' => ['nullable', 'string', 'max:255'],
            'date' => ['required', 'date'],
            'location' => ['nullable', 'string', 'max:255'],
            'image' => ['nullable', 'url', 'max:500'],
            'description' => ['nullable', 'string'],
            'category' => ['nullable', 'string', 'max:255'],
            'tags_input' => ['nullable', 'string'],
        ];
    }
}
