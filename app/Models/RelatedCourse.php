<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelatedCourse extends Model
{
    use HasFactory;
    protected  $fillable =['course_id','related_course_id'];

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function relatedCourse(){
        return $this->belongsTo(Course::class,'related_course_id');
    }

}
