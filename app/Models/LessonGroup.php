<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonGroup extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','sort_order'];

    public function lessons(){
        return $this->belongsToMany(Lesson::class);
    }
}
