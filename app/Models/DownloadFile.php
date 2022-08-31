<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DownloadFile extends Model
{
    use HasFactory;
    protected $fillable = ['download_id','path','enabled'];

    public function download(){
        return $this->belongsTo(Download::class);
    }
}
