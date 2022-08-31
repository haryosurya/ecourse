<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;
    protected $fillable = ['name','enabled','directory'];

    public function templateOptions(){
        return $this->hasMany(TemplateOption::class);
    }

    public function templateColors(){
        return $this->hasMany(TemplateColor::class);
    }
}
