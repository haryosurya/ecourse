<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WidgetValue extends Model
{
    use HasFactory;
    protected $fillable = ['widget_id','value','enabled','sort_order','visibility'];

    public function widget(){
        return $this->belongsTo(Widget::class);
    }
}
