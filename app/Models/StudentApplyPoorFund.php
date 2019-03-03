<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class StudentApplyPoorFund
 * @package App\Models
 * @version December 7, 2018, 10:29 am UTC
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
class StudentApplyPoorFund extends Model
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
        'suerId' => 'integer',
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
    
    public function application(){
        return $this->belongsTo(Student::class, 'userId');
    } 
    
}
