<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','enabled','hash','admin_id','private'];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function surveyQuestions(){
        return $this->hasMany(SurveyQuestion::class);
    }

    public function surveyResponses(){
        return $this->hasMany(SurveyResponse::class);
    }

}
