<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateOption extends Model
{
    use HasFactory;
    protected $fillable = ['template_id','name','value','enabled'];

    public function template(){
        return $this->belongsTo(Template::class);
    }
}
