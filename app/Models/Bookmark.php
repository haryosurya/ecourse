<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;
    protected $fillable = ['course_id','student_id','lecture_page_id'];

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function lecturePage(){
        return $this->belongsTo(LecturePage::class);
    }
}
