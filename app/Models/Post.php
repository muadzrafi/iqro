<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory, SoftDeletes;

     protected $fillable = [
        'thumbnail',
        'author',
        'date',
        'title',
        'slug',
        'content',
        'category_id',
        'status',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($post) {
            if (empty($post->slug) || $post->isDirty('title')) {
                $post->slug = Str::slug($post->title);
            }
        });
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
