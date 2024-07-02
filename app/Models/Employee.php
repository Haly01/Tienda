<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'last_name',
        'age',
        'gender',
        'email',
        'phone',
        'address',
        'salary',
        'identification_card',
        'store_id'
    ];

    public function stores()
    {
        return $this->belongsTo(Store::class);
    }
}

