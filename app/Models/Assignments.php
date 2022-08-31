<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignments extends Model
{
    use HasFactory;
    protected $fillable = ['title','course_id','lesson_id','admin_id','due_date','type','instruction','passmark','notify','allow_late','opening_date','schedule_type'];

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function lesson(){
        return $this->belongsTo(Lesson::class);
    }

    public function admin(){
        return $this->belongsTo(Admin::class);
    }

    public function assignmentSubmissions(){
        return $this->hasMany(AssignmentSubmission::class);
    }
}
