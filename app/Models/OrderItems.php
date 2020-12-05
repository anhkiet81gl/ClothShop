<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    protected $table = 'order_items';

    public function product(){
        return $this->hasOne(Products::class, 'id', 'product_id');
    }

    public $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'unit_price'
    ];

}
