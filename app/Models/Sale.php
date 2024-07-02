<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
       'name',
       'description',
       'price'
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

}
