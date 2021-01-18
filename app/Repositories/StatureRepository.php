<?php

namespace App\Repositories;

use App\Models\Stature;
use App\Repositories\BaseRepository;

/**
 * Class StatureRepository
 * @package App\Repositories
 * @version January 17, 2021, 11:01 pm UTC
*/

class StatureRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return Stature::class;
    }
}
