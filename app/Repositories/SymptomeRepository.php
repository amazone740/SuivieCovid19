<?php

namespace App\Repositories;

use App\Models\Symptome;
use App\Repositories\BaseRepository;

/**
 * Class SymptomeRepository
 * @package App\Repositories
 * @version January 13, 2021, 6:44 am UTC
*/

class SymptomeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'origine',
        'cible',
        'mesure_de_riposte'
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
        return Symptome::class;
    }
}
