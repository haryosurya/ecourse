<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseLessonAdmin extends Model
{
    use HasFactory;
    protected $fillable = ['course_id','admin_id','lesson_id'];

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function admin(){
        return $this->belongsTo(Admin::class);
    }

    public function lesson(){
        return $this->belongsTo(Lesson::class);
    } 
}
