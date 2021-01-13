<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Symptome
 * @package App\Models
 * @version January 13, 2021, 6:44 am UTC
 *
 * @property string $name
 * @property string $description
 * @property string $origine
 * @property string $cible
 * @property string $mesure_de_riposte
 */
class Symptome extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'symptomes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'origine',
        'cible',
        'mesure_de_riposte'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'origine' => 'string',
        'cible' => 'string',
        'mesure_de_riposte' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    
}
