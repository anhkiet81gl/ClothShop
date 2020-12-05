<?php

namespace App\Repositories;

use App\Models\OrderStatus;
use App\Repositories\BaseRepository;

/**
 * Class OrderStatusRepository
 * @package App\Repositories
 * @version November 23, 2020, 2:25 am UTC
*/

class OrderStatusRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description'
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
        return OrderStatus::class;
    }
}
