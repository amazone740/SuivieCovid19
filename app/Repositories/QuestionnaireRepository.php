<?php

namespace App\Repositories;

use App\Models\Questionnaire;
use App\Repositories\BaseRepository;

/**
 * Class QuestionnaireRepository
 * @package App\Repositories
 * @version January 14, 2021, 1:08 pm UTC
*/

class QuestionnaireRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'intituler'
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
        return Questionnaire::class;
    }
}
