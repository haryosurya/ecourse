<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyQuestion extends Model
{
    use HasFactory;
    protected $fillable = ['survey_id','question','sort_order'];

    public function survey(){
        return $this->belongsTo(Survey::class);
    }

    public function surveyOptions(){
        return $this->hasMany(SurveyOption::class);
    }
}
