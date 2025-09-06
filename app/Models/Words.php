<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Words extends Model
{
    protected $table="words";
    protected $fillable=[
        'word',
        'slug',
        'meaning',
        'pronunciation',
        'example',
        'url'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($word) {
            if (empty($word->slug)) {
                $word->slug = static::generateUniqueSlug($word->word);
            }
        });

        static::updating(function ($word) {
            if ($word->isDirty('word') && empty($word->slug)) {
                $word->slug = static::generateUniqueSlug($word->word);
            }
        });
    }

    /**
     * Generate a unique slug from the word
     */
    protected static function generateUniqueSlug($word)
    {
        $slug = Str::slug($word);
        $originalSlug = $slug;
        $counter = 1;

        while (static::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
