<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name','enabled','sort_order','description','parent_id'];

    public function courses(){
        return $this->belongsToMany(Course::class);
    }
}
