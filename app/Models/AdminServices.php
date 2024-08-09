<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminServices extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'icon',
        'description',
        'services',
      
    ];
}
