<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Casinfecter
 * @package App\Models
 * @version January 18, 2021, 2:45 am UTC
 *
 * @property \App\Models\Patient $patient
 * @property \App\Models\Stature $statut
 * @property \App\Models\Symptome $symptome
 * @property integer $patient_id
 * @property integer $statut_id
 * @property integer $symptome_id
 */
class Casinfecter extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'casinfecters';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'patient_id',
        'statut_id',
        'symptome_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'patient_id' => 'integer',
        'statut_id' => 'integer',
        'symptome_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'patient_id' => 'required',
        'statut_id' => 'required',
        'symptome_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function patient()
    {
        return $this->belongsTo(\App\Models\Patient::class, 'patient_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function statut()
    {
        return $this->belongsTo(\App\Models\Stature::class, 'statut_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function symptome()
    {
        return $this->belongsTo(\App\Models\Symptome::class, 'symptome_id', 'id');
    }
}
