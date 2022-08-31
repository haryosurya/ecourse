<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCourseLog extends Model
{
    use HasFactory;
    protected $fillable = ['student_id','course_id','lecture_id'];

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function lecture(){
        return $this->belongsTo(Lecture::class);
    }


}
