<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseKeypoint extends Model
{
    use HasFactory, SoftDeletes;

    // cara pertama dalam mempersiapkan mass asignment
    protected $fillable = [
        'user_id',
        'course_id',
    ];

    public function course(){
        return $this->belongsTo(Course::class);
    }
}
