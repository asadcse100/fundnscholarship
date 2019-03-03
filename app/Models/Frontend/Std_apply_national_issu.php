<?php

namespace App\Models\Frontend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Std_apply_national_issu
 * @package App\Models\Frontend
 * @version December 22, 2018, 11:21 am UTC
 *
 * @property string class
 * @property string year
 * @property string issue_name
 * @property string issue_type
 * @property string description
 * @property string issue_image
 * @property string video_link
 * @property string remarks
 */
class Std_apply_national_issu extends Model
{
    use SoftDeletes;

    public $table = 'std_apply_national_issu';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'userId',
        'first_name',
        'last_name',
        'phone',
        'adress',
        'organize',
        'class',
        'year',
        'issue_name',
        'issue_type',
        'description',
        'issue_image',
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
        'issue_name' => 'string',
        'issue_type' => 'string',
        'description' => 'string',
        'issue_image' => 'string',
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
