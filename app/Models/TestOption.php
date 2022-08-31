<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestOption extends Model
{
    use HasFactory;
    protected $fillable = ['test_question_id','option','is_correct'];

    public function testQuestion(){
        return $this->belongsTo(TestQuestion::class);
    }
}
