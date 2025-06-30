<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DimDate extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = "dim_dates";

    protected $fillable = [
        'id', 
        'day', 
        'month', 
        'month_name', 
        'quarter', 
        'year', 
        'day_name', 
        'is_weekend',
    ];
}
