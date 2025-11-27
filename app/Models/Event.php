<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory, \Illuminate\Database\Eloquent\Concerns\HasUuids;

    protected $fillable = [
        'community_id',
        'organizer_id',
        'title',
        'description',
        'location',
        'start_time',
        'end_time',
        'status',
        'image',
        'tags',
    ];

    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
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
