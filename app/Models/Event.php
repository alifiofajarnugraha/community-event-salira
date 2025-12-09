<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'community_id',
        'organizer_id',
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
    public function community()
    {
        return $this->belongsTo(Community::class);
    }

    public function organizer()
    {
        return $this->belongsTo(User::class, 'organizer_id');
    }
}
