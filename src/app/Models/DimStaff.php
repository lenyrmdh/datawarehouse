<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DimStaff extends Model
{
    protected $table = "dim_staff";

    protected $fillable = ['name', 'role', 'branch'];

}
