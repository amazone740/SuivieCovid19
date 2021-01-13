<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class AgentSanitaire
 * @package App\Models
 * @version January 13, 2021, 7:35 am UTC
 *
 * @property \App\Models\User $user
 * @property integer $user_id
 * @property string $cni_agent
 * @property string $ville_residence
 * @property string $centre_provenance
 * @property string $debut_service
 */
class AgentSanitaire extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'agent_sanitaires';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'cni_agent',
        'ville_residence',
        'centre_provenance',
        'debut_service'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'cni_agent' => 'string',
        'ville_residence' => 'string',
        'centre_provenance' => 'string',
        'debut_service' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'cni_agent' => 'required',
        'ville_residence' => 'required',
        'centre_provenance' => 'required',
        'debut_service' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }
}
