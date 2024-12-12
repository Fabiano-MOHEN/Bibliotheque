<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'author',
        'title',
        'image',
        'price',
        'edition',
        'published_at',
        'resume',
        'user_id',
        'state_id',
        'category_id',
    ];
}
