<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    protected $fillable = [
        'staff_number', 'card_number', 'payment_type', 'amount', 'receipt_number'
    ];
}
