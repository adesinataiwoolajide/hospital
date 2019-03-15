<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DrugStock extends Model
{
    protected $table = 'drug_stocks';
    protected $fillable = [
        'drug_name', 'drug_cate', 'miligram', 'type_id', 'total_quantity', 'total_carton', 'total_sachet'
    ];
}
