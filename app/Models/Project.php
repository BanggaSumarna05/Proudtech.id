<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use \App\Traits\LogsActivity;

    const TYPE_CLIENT = 'client';
    const TYPE_INTERNAL = 'internal';

    const STATUS_PUBLISHED = true;
    const STATUS_DRAFT = false;
    protected $fillable = [
        'title',
        'slug',
        'overview',
        'description',
        'features',
        'tech_stack',
        'type',
        'thumbnail',
        'client_name',
        'project_url',
        'is_published',
    ];

    protected $casts = [
        'features' => 'array',
        'tech_stack' => 'array',
        'is_published' => 'boolean',
    ];

    public function images()
    {
        return $this->hasMany(ProjectImage::class)->orderBy('order');
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($project) {
            if (empty($project->slug)) {
                $project->slug = Str::slug($project->title);
            }
        });
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
