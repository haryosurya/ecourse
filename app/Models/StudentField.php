<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentField extends Model
{
    use HasFactory;
    protected $fillable = ['name','sort_order','type','options','required','placeholder','enabled'];

}
