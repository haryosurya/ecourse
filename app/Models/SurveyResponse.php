<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyResponse extends Model
{
    use HasFactory;
    protected $fillable = ['survey_id','student_id'];

    public function survey(){
        return $this->belongsTo(Survey::class);
    }

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function surveyOptions(){
        return $this->belongsToMany(SurveyOption::class);
    }

}
