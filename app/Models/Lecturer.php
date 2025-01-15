<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lecturer extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'coming_from',
        'status',
        'documents_id',
    ];

    public function videos()
    {
        return $this->hasMany(Video::class, 'lecturers_id');
    }
}
