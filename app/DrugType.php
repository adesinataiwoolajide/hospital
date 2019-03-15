<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DrugType extends Model
{
    protected $table = 'drug_types';
    protected $fillable = [
        'type_name'
    ];
}
