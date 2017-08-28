<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Demand
 * @package App\Models
 * @version August 28, 2017, 9:23 am UTC
 *
 * @property string name
 * @property string company
 * @property string demand_product
 * @property string demand_product_detail
 * @property string demand_quantity
 * @property string demand_unit
 * @property string demand_estimation_price_low
 * @property string demand_estimation_price_height
 * @property string demand_expired_date
 * @property string demand_due_date
 * @property string demand_phone
 * @property string demand_email
 */
class Demand extends Model
{
    use SoftDeletes;

    public $table = 'demands';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'demand_name',
        'demand_company',
        'demand_product',
        'demand_product_detail',
        'demand_quantity',
        'demand_unit',
        'demand_estimation_price_low',
        'demand_estimation_price_height',
        'demand_expired_date',
        'demand_due_date',
        'demand_phone',
        'demand_email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'demand_name' => 'string',
        'demand_company' => 'string',
        'demand_product' => 'string',
        'demand_product_detail' => 'string',
        'demand_quantity' => 'string',
        'demand_unit' => 'string',
        'demand_estimation_price_low' => 'string',
        'demand_estimation_price_height' => 'string',
        'demand_expired_date' => 'string',
        'demand_due_date' => 'string',
        'demand_phone' => 'string',
        'demand_email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'demand_name' => 'required',
        'demand_product' => 'required',
        'demand_product_detail' => 'required',
        'demand_quantity' => 'required',
        'demand_unit' => 'required',
        'demand_estimation_price_low' => 'required',
        'demand_estimation_price_height' => 'required',
        'demand_expired_date' => 'required',
        'demand_due_date' => 'required',
        'demand_phone' => 'required',
        'demand_email' => 'required'
    ];

    
}
