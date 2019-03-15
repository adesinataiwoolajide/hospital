<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    protected $table = 'drugs';
    protected $fillable = [
        'drug_name', 'drug_number', 'carton', 'sachet', 'pack_price', 'price', 'quantity', 'manufacturer', 'miligram', 'type_id',
        'category_id', 'manu_date', 'exp_date'
    ];
}
