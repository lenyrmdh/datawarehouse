<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DimStore extends Model
{
    protected $table = "dim_stores";
    
    protected $fillable = ['store_name', 'region', 'channel'];

}
