<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ip extends Model
{
    use HasFactory;
    protected $fillable = [ 
   'ip','country','iso_code','city','state','postal_code','lat','lon','timezone' 
    ];
}
