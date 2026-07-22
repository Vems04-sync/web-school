<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Facility extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'category',
        'description',
        'image',
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
                if (!$disk->exists($value) && !$disk->exists('facilities/' . $value)) {
                    return null;
                }
                return $value;
            }
        );
    }
}
