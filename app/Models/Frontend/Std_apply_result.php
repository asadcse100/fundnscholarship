<?php

namespace App\Models\Frontend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Std_apply_result
 * @package App\Models\Frontend
 * @version December 22, 2018, 8:46 am UTC
 *
 * @property string class
 * @property string year
 * @property string gpa_cgpa
 * @property string merit_list
 * @property string result_image
 */
class Std_apply_result extends Model
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
        'class',
        'year',
        'gpa_cgpa',
        'merit_list',
        'organize',
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
        'class' => 'string',
        'year' => 'string',
        'gpa_cgpa' => 'string',
        'merit_list' => 'string',
        'organize' => 'string',
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

    public function application(){
        return $this->belongsTo(Student::class, 'userId');
    } 
    
}
