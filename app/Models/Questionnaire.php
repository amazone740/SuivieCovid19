<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Questionnaire
 * @package App\Models
 * @version January 14, 2021, 1:08 pm UTC
 *
 * @property string $intituler
 */
class Questionnaire extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'questionnaires';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'intituler'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'intituler' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'intituler' => 'required'
    ];

    
}
