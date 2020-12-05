<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Banner
 * @package App\Models
 * @version November 23, 2020, 3:06 am UTC
 *
 * @property string $slide_name
 * @property string $link
 */
class Banner extends Model
{
    use SoftDeletes;

    public $table = 'banners';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'slide_name',
        'link'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'slide_name' => 'string',
        'link' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'slide_name' => 'required',
        'link' => 'required'
    ];

    
}
