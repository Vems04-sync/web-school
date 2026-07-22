<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class HeroSlide extends Model
{
    use HasFactory;

    protected $fillable = [
        'tagline',
        'title',
        'description',
        'image',
        'primary_btn_text',
        'primary_btn_url',
        'secondary_btn_text',
        'secondary_btn_url',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
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
                if (!$disk->exists($value) && !$disk->exists('slides/' . $value)) {
                    return null;
                }
                return $value;
            }
        );
    }
}
