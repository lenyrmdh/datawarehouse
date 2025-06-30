<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DimProduct extends Model
{
    protected $table = "dim_products";

    protected $fillable = ['name', 'category', 'brand', 'unit_price'];

}
