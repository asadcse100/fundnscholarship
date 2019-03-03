<?php

namespace App\Models\Frontend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Std_apply_poor_fund
 * @package App\Models\Frontend
 * @version December 23, 2018, 10:04 am UTC
 *
 * @property string class
 * @property string year
 * @property string gpa_cgpa
 * @property string father_occupation
 * @property integer monthly_income
 * @property string description
 * @property string chirman_certificate
 * @property string remarks
 */
class Std_apply_poor_fund extends Model
{
    use SoftDeletes;

    public $table = 'std_apply_poor_funds';
    
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
        'father_occupation',
        'monthly_income',
        'description',
        'chirman_certificate',
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
        'gpa_cgpa' => 'string',
        'father_occupation' => 'string',
        'monthly_income' => 'integer',
        'description' => 'string',
        'chirman_certificate' => 'string',
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
