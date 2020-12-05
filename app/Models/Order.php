<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Order
 * @package App\Models
 * @version November 23, 2020, 4:07 am UTC
 *
 * @property string $customer_id
 * @property string $delivery_id
 * @property string $total
 * @property string $note
 */
class Order extends Model
{
    use SoftDeletes;

    protected $table = 'orders';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'customer_id',
        'delivery_id',
        'total',
        'note'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'customer_id' => 'string',
        'delivery_id' => 'string',
        'total' => 'string',
        'note' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'customer_id' => 'required',
        'delivery_id' => 'required',
        'total' => 'required'
    ];

    public function item(){
        return $this->hasMany(OrderItems::class, 'order_id', 'id');
    }

}
