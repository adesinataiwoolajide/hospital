<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';
    protected $fillable = [
        'staff_number', 'card_number', 'date_of', 'unit_id',
    ];
}
