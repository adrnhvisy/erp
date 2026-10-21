<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['course_id', 'name', 'description'])]

class Lesson extends Model
{
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
