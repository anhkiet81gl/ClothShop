<?php

namespace App\Repositories;

use App\Models\Delivery;
use App\Repositories\BaseRepository;

/**
 * Class DeliveryRepository
 * @package App\Repositories
 * @version November 23, 2020, 2:45 am UTC
*/

class DeliveryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'cost'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Delivery::class;
    }
}
