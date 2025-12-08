<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommunityRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'icon' => ['nullable', 'string', 'max:100'],
            'accent' => ['nullable', 'string', 'max:7'],
            'tags_input' => ['nullable', 'string'],
            'description' => ['nullable', 'string'],
            'members' => ['nullable', 'string', 'max:50'],
            'posts_today' => ['nullable', 'integer', 'min:0'],
            'member_count' => ['nullable', 'integer', 'min:0'],
            'is_joined' => ['nullable', 'boolean'],
            'subtitle' => ['nullable', 'string', 'max:255'],
            'event_tag' => ['nullable', 'string', 'max:255'],
            'cover' => ['nullable', 'url', 'max:500'],
            'location' => ['nullable', 'string', 'max:255'],
            'date' => ['nullable', 'string', 'max:255'],
            'long_description' => ['nullable', 'string'],
            'activities_input' => ['nullable', 'string'],
            'related_input' => ['nullable', 'string'],
            'moderators_input' => ['nullable', 'string'],
            'rules_input' => ['nullable', 'string'],
        ];
    }
}
