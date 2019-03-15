<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HospitalTest extends Model
{
    protected $table = 'hospital_tests';
    protected $fillable = [
        'test_name', 'unit_id', 'amount'
    ];
}
