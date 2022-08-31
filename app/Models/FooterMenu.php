<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterMenu extends Model
{
    protected $fillable = ['name','label','url','type','sort_order','parent_id','new_window'];
}
