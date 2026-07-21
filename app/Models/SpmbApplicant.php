<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpmbApplicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_number',
        'full_name',
        'nisn',
        'previous_school',
        'phone',
        'address',
        'status',
    ];
}
