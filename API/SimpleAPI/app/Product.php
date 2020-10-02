<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $fillable = [
        'id',
        'Product_Name',
        'Price', 
        'Tax ',
        'Total_cost'   
    ];
}
