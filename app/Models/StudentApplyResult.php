<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class StudentApplyResult
 * @package App\Models
 * @version December 7, 2018, 10:26 am UTC
 *
 * @property string class
 * @property string year
 * @property string gpa_cgpa
 * @property string merit_list
 * @property string result_image
 */
class StudentApplyResult extends Model
{
    use SoftDeletes;

    public $table = 'std_apply_results';
    
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
        'gpa_cgpa',
        'merit_list',
        'result_image',
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
        'gpa_cgpa' => 'string',
        'merit_list' => 'string',
        'result_image' => 'string',
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
