<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendingStudent extends Model
{
    use HasFactory;
    protected $fillable = ['data','hash'];

    public function pendingStudentFiles(){
        return $this->hasMany(PendingStudentFile::class);
    }
}
