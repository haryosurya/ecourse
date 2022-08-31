<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCertificateDownload extends Model
{
    use HasFactory;
    protected $fillable = ['student_id','certificate_id'];

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function certificate(){
        return $this->belongsTo(Certificate::class);
    }


}
