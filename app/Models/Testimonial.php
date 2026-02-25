<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use \App\Traits\LogsActivity;

    protected $fillable = [
        'name',
        'company',
        'position',
        'avatar',
        'message',
        'rating',
        'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }
}
