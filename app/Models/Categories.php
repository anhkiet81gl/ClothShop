<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Categories
 * @package App\Models
 * @version November 17, 2020, 9:48 am UTC
 *
 * @property string $category_name
 */
class Categories extends Model
{
    use SoftDeletes;

    public $table = 'categories';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'category_name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'category_name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'category_name' => 'required'
    ];

    
}
