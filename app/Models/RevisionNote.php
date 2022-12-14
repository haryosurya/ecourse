<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RevisionNote extends Model
{
    use HasFactory;
    protected $fillable = ['title','content','description','course_id','lesson_id','admin_id'];


    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function lesson(){
        return $this->belongsTo(Lesson::class);
    }

    public function admin(){
        return $this->belongsTo(Admin::class);
    }
}
