<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Need extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'category', 'message','email'];

    protected $casts = [
        'category' => 'array', // Automatically convert JSON to array
    ];
}
