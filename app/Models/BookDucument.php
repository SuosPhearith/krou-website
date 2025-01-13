<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookDucument extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'file_uri',
        'books_id',
        'status',
    ];
}
