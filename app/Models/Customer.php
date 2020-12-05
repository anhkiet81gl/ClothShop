<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Customer
 * @package App\Models
 * @version November 23, 2020, 3:46 am UTC
 *
 * @property string $name
 * @property string $gender
 * @property string $email
 * @property string $address
 * @property string $phone_number
 * @property string $note
 */
class Customer extends Model
{
    use SoftDeletes;

    public $table = 'customers';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'gender',
        'email',
        'address',
        'phone_number',
        'note'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'gender' => 'string',
        'email' => 'string',
        'address' => 'string',
        'phone_number' => 'string',
        'note' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'gender' => 'required',
        'email' => 'email',
        'address' => 'required',
        'phone_number' => 'required'
    ];

    
}
