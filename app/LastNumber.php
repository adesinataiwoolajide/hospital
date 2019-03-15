<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LastNumber extends Model
{
    protected $table = 'last_numbers';
    protected $fillable = [
        'category', 'numbers', 'year_number'
    ];
}
