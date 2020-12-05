<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Products
 * @package App\Models
 * @version November 17, 2020, 9:58 am UTC
 *
 * @property string $product_name
 * @property string $category_id
 * @property string $product_image
 * @property string $price
 * @property string $description
 */
class Products extends Model
{
    use SoftDeletes;

    public $table = 'products';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'product_name',
        'category_id',
        'product_image',
        'price',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_name' => 'string',
        'category_id' => 'string',
        'product_image' => 'string',
        'price' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_name' => 'required',
        'category_id' => 'required',
        'product_image' => 'required',
        'price' => 'required',
        'description' => 'required'
    ];

    
}
