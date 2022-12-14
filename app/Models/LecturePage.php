<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LecturePage extends Model
{
    use HasFactory;
    protected $fillable = ['lecture_id','title','content','type','sort_order','audio_code'];


    public function bookmarks(){
        return $this->hasMany(Bookmark::class);
    }

    public function lecture(){
        return $this->belongsTo(Lecture::class);
    }
}
