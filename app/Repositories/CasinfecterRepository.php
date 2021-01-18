<?php

namespace App\Repositories;

use App\Models\Casinfecter;
use App\Repositories\BaseRepository;

/**
 * Class CasinfecterRepository
 * @package App\Repositories
 * @version January 18, 2021, 2:45 am UTC
*/

class CasinfecterRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patient_id',
        'statut_id',
        'symptome_id'
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
        return Casinfecter::class;
    }
}
