<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Override;
#[Fillable(['user_id', 'category_id', 'name', 'description', 'image'])]
class Course extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    #[Override]
    public static function booted()
    {
        static::creating(function ($record) {
            if (auth()->check() && empty($record->user_id)) {
                $record->user_id = auth()->id();
            }
        });
        // static::deleted(function ($record) {
            // Handle deletion logic if needed
        // });
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class, 'course_id');
    }
}
