<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory, \Illuminate\Database\Eloquent\Concerns\HasUuids;

    protected $fillable = [
        'name',
        'creator_id',
        'description',
        'logo',
        'tags',
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
