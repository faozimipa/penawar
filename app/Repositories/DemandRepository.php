<?php

namespace App\Repositories;

use App\Models\Demand;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DemandRepository
 * @package App\Repositories
 * @version August 28, 2017, 9:23 am UTC
 *
 * @method Demand findWithoutFail($id, $columns = ['*'])
 * @method Demand find($id, $columns = ['*'])
 * @method Demand first($columns = ['*'])
*/
class DemandRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Demand::class;
    }
}
