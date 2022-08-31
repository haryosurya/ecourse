<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyOption extends Model
{
    use HasFactory;
    protected $fillable= ['survey_question_id','option'];

    public function surveyQuestion(){
        return $this->belongsTo(SurveyQuestion::class);
    }

}
