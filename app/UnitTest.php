<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitTest extends Model
{
    protected $table = 'unit_tests';
    protected $fillable = [
        'test_id', 'staff_number', 'card_number', 'result'
    ];
}
