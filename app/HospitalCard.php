<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HospitalCard extends Model
{
    protected $table = 'hospital_cards';
    protected $fillable = [
        'card_number', 'name', 'sex', 'date_birth', 'address'
    ];
}
