<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    protected $fillable = ['admin_id','name','description','enabled','minutes','allow_multiple','passmark','private','show_result'];

    public function courses(){
        return $this->belongsToMany(Course::class);
    }

    public function admin(){
        return $this->belongsTo(Admin::class);
    }

    public function testQuestions(){
        return $this->hasMany(TestQuestion::class);
    }

    public function studentTests(){
        return $this->hasMany(StudentTest::class);
    }
}
