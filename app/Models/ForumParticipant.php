<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumParticipant extends Model
{
    use HasFactory;
    protected $fillable = ['forum_topic_id','user_id','notify'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function forumTopic(){
        return $this->belongsTo(ForumTopic::class);
    }

}
