<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Build extends Model
{
    use HasFactory;
    protected $fillable = [
        'category',
        'image',
        'full_name',
        'email',
        'residential-type',
        'property_category',
        'commercial-type',
        'other-commercial-type',
        'phone',
        'notes',
    ];
}
