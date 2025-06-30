<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DimCustomer extends Model
{
    protected $table = "dim_customers";
    protected $fillable = ['name', 'gender', 'age_group', 'city', 'join_date'];
}
