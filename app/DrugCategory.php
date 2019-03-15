<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DrugCategory extends Model
{
    protected $table = 'drug_categories';
    protected $fillable = [
        'category_name'
    ];
}
