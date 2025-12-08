<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'community_id',
        'community_name',
        'date',
        'location',
        'image',
        'description',
        'category',
        'tags',
    ];

    protected $casts = [
        'date' => 'datetime',
        'tags' => 'array',
    ];
}
