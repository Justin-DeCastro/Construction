<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'notes',
        'category',
        'property_category',
        'residential-type',
        'commercial-type',
        'other-commercial-type',
        'image',
    ];

    // Optional: Add any additional logic for the model here
}
