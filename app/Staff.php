<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';
    protected $fillable = [
        'passport', 'email', 'phone_number', 'staff_number', 'type_id', 'unit_id'
    ];
}
