<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Binnacle extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        'description',
        'date',
        'hour',
        'store_id',
        'employee_id',
        'costumer_id',
        'product_id'
    ];

    public function stores()
    {
        return $this->belongsTo(Store::class);
    }

    public function employees()
    {
        return $this->belongsTo(Employee::class);
    }

    public function costumers()
    {
        return $this->belongsTo(Customer::class);
    }

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
