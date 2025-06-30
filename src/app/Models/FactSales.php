<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FactSales extends Model
{
    protected $fillable = [
        'date_id', 'product_id', 'customer_id', 'store_id', 'staff_id', 'quantity_sold', 'total_price',
    ];

    public function date()
    {
        return $this->belongsTo(DimDate::class, 'date_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(DimProduct::class);
    }

    public function customer()
    {
        return $this->belongsTo(DimCustomer::class);
    }

    public function store()
    {
        return $this->belongsTo(DimStore::class);
    }

    public function staff()
    {
        return $this->belongsTo(DimStaff::class);
    }
}
