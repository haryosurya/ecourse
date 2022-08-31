<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LectureNote extends Model
{
    use HasFactory;
    protected $fillable = ['student_id','lecture_id','content'];

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function lecture(){
        return $this->belongsTo(Lecture::class);
    }
}
