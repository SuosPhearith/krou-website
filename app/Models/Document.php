<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'cover_uri',
        'status',
    ];

    public function lecturers()
    {
        return $this->hasMany(Lecturer::class, 'documents_id');
    }
}
