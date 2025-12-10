<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LiteratureResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'author' => $this->author,
            'cover' => $this->cover,
            'rating' => $this->rating,
            'description' => $this->description,
            'year_edition' => $this->year_edition,
            'total_bookmarked' => $this->total_bookmarked,
            'tags' => $this->tags ?? [],
            'copy_types' => $this->copy_types ?? [],
            'licensing_type' => $this->licensing_type,
            'sources' => $this->sources ?? [],
            'twitter_embeds' => $this->twitter_embeds ?? [],
            'related_posts' => $this->related_posts ?? [],
            'community_id' => $this->community_id,
            'created_at' => $this->created_at?->toISOString(),
            'updated_at' => $this->updated_at?->toISOString(),
        ];
    }
}