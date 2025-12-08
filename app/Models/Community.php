<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory, \Illuminate\Database\Eloquent\Concerns\HasUuids;

    protected $fillable = [
        'name',
        'icon',
        'accent',
        'tags',
        'description',
        'members',
        'posts_today',
        'member_count',
        'is_joined',
        'subtitle',
        'event_tag',
        'cover',
        'location',
        'date',
        'long_description',
        'activities',
        'related',
        'statistics',
        'moderators',
        'rules',
    ];

    protected $casts = [
        'tags' => 'array',
        'is_joined' => 'boolean',
        'posts_today' => 'integer',
        'member_count' => 'integer',
        'activities' => 'array',
        'related' => 'array',
        'statistics' => 'array',
        'moderators' => 'array',
        'rules' => 'array',
    ];

    protected $casts = [
        'tags' => 'array',
    ];
    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
