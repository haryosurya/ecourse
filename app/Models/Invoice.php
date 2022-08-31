<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','amount','cart','paid','payment_method_id'];

    public function user(){
        return $this->belongsTo(User::class);
    } 

    public function paymentMethod(){
        return $this->belongsTo(PaymentMethod::class);
    }

    public function invoiceTransactions(){
        return $this->hasMany(InvoiceTransaction::class);
    }
}
