<?php

namespace App\Repositories;

use App\Models\Hopital;
use App\Repositories\BaseRepository;

/**
 * Class HopitalRepository
 * @package App\Repositories
 * @version January 17, 2021, 11:20 pm UTC
*/

class HopitalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'localisation',
        'phonenumber'
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
        return Hopital::class;
    }
}
