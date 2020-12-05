<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OrderStatus
 * @package App\Models
 * @version November 23, 2020, 2:25 am UTC
 *
 * @property string $name
 * @property string $description
 */
class OrderStatus extends Model
{
    use SoftDeletes;

    public $table = 'order_statuses';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'description' => 'required'
    ];

    
}
