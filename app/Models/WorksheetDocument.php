<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorksheetDocument extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'file_uri',
        'worksheets_id',
        'status',
        'cover_uri',
        'coming_from',
        'lecturer',
        'description',
        'published_date'
    ];
}
