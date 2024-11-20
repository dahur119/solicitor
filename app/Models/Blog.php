<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    
    protected $fillable =[
        "title",
        "slug",
        "message",
        "author",
        "image"
    ];

    public function comments(){
        return $this->hasMany(Comment::class, 'blogs_id');
    }
}
