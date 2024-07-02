<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        'description',
        'expired_date',
        'price',
        'code_product',
        'store_id',
        'sale_id',
    ];

    public function stores()
    {
        return $this->belongsTo(Store::class);
    }

    public function sales()
    {
        return $this->belongsTo(Sale::class);
    }
}
