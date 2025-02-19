<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{

    use HasFactory, SoftDeletes;
    protected $fillable = [
        'title',
        'description',
        'published_date',
        'cover_uri',
        'coming_from',
        'lecturer',
        'file_uri',
        'status',
    ];
}
