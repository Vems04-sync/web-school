<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                if (blank($value)) return null;
                if (str_starts_with($value, 'http://') || str_starts_with($value, 'https://')) {
                    return $value;
                }
                $disk = Storage::disk('public');
                if (!$disk->exists($value) && !$disk->exists('articles/' . $value)) {
                    return null;
                }
                return $value;
            }
        );
    }
}
