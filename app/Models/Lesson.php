<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable =['name','admin_id','picture','description','sort_order','text_required','test_id','type','introduction','enforce_lecture_order'];

    public function assignments(){
        return $this->hasMany(Assignment::class);
    }

    public function attendances(){
        return $this->hasMany(Attendance::class);
    }

    public function lessonGroups(){
        return $this->belongsToMany(LessonGroup::class);
    }

    public function lectures(){
        return $this->hasMany(Lecture::class);
    }
}
