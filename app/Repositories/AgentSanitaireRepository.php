<?php

namespace App\Repositories;

use App\Models\AgentSanitaire;
use App\Repositories\BaseRepository;

/**
 * Class AgentSanitaireRepository
 * @package App\Repositories
 * @version January 13, 2021, 7:35 am UTC
*/

class AgentSanitaireRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'cni_agent',
        'ville_residence',
        'centre_provenance',
        'debut_service'
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
        return AgentSanitaire::class;
    }
}
