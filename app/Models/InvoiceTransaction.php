<?php

namespace App\Models;

use App\Lib\BaseTable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceTransaction extends Model
{
    use BaseTable;
    use HasFactory;
    protected $fillable = ['invoice_id','status','amount'];
    protected $tableName = 'invoice_transactions';

    public function invoice(){
        return $this->belongsTo(Invoice::class);
    }
}
