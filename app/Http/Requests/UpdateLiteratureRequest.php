<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLiteratureRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['sometimes', 'required', 'string', 'max:255'],
            'author' => ['nullable', 'string', 'max:255'],
            'cover' => ['nullable', 'url', 'max:500'],
            'rating' => ['nullable', 'numeric', 'between:0,5'],
            'description' => ['nullable', 'string'],
            'year_edition' => ['nullable', 'string', 'max:255'],
            'total_bookmarked' => ['nullable', 'integer', 'min:0'],
            'licensing_type' => ['nullable', 'string', 'max:255'],
            'community_id' => ['nullable', 'string', 'max:255'],
            'tags_input' => ['nullable', 'string'],
            'copy_types_input' => ['nullable', 'string'],
            'sources_input' => ['nullable', 'string'],
            'twitter_embeds_input' => ['nullable', 'string'],
            'related_posts_input' => ['nullable', 'string'],
        ];
    }
}
