<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendingStudentFile extends Model
{
    use HasFactory;
    protected $fillable = ['pending_student_id','file_name','file_path','field_id'];

    public function pendingStudent(){
        return $this->belongsTo(PendingStudent::class);
    }
}
