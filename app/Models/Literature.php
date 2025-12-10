<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Literature extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'cover',
        'rating',
        'description',
        'year_edition',
        'total_bookmarked',
        'tags',
        'copy_types',
        'licensing_type',
        'sources',
        'twitter_embeds',
        'related_posts',
        'community_id',
    ];

    protected $casts = [
        'rating' => 'float',
        'total_bookmarked' => 'integer',
        'tags' => 'array',
        'copy_types' => 'array',
        'sources' => 'array',
        'twitter_embeds' => 'array',
        'related_posts' => 'array',
    ];
}
