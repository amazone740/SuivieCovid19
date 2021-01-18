<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Hopital
 * @package App\Models
 * @version January 17, 2021, 11:20 pm UTC
 *
 * @property string $name
 * @property string $localisation
 * @property string $phonenumber
 */
class Hopital extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'hopitals';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'localisation',
        'phonenumber'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'localisation' => 'string',
        'phonenumber' => 'string'
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
