<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casenote extends Model
{
    protected $table = 'casenotes';
    protected $fillable = [
        'card_number', 'staff_number', 'content', 'test_id'
    ];
}
