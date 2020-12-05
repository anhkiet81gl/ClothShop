<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Delivery
 * @package App\Models
 * @version November 23, 2020, 2:45 am UTC
 *
 * @property string $name
 * @property string $cost
 */
class Delivery extends Model
{
    use SoftDeletes;

    public $table = 'deliveries';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'cost'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'cost' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'cost' => 'required'
    ];

    
}
