<?php

namespace App\Models\Frontend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Std_apply_innovation
 * @package App\Models\Frontend
 * @version December 23, 2018, 9:54 am UTC
 *
 * @property string class
 * @property string year
 * @property string innovation_name
 * @property string innovation_type
 * @property string description
 * @property string video_link
 * @property string remarks
 */
class Std_apply_innovation extends Model
{
    use SoftDeletes;

    public $table = 'std_apply_innovations';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'userId',
        'first_name',
        'last_name',
        'adress',
        'phone',
        'organize',
        'class',
        'year',
        'innovation_name',
        'innovation_type',
        'description',
        'video_link',
        'remarks',
        'division',
        'district',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'userId' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'phone' => 'string',
        'adress' => 'string',
        'organize' => 'string',
        'class' => 'string',
        'year' => 'string',
        'innovation_name' => 'string',
        'innovation_type' => 'string',
        'description' => 'string',
        'video_link' => 'string',
        'remarks' => 'string',
        'division' => 'integer',
        'district' => 'integer',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
