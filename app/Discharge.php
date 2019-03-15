<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discharge extends Model
{
    protected $table = 'discharges';
    protected $fillable = [
        'card_number', 'staff_number', 'condition'
    ];
}
