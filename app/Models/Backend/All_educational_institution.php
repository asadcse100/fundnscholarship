<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class All_educational_institution
 * @package App\Models\Backend
 * @version January 25, 2019, 8:31 pm UTC
 *
 * @property integer id
 * @property string name
 * @property integer eiin
 * @property string type
 * @property integer division_id
 * @property string division
 * @property integer district_id
 * @property string district
 * @property string thana
 * @property string unon
 * @property string address
 * @property string post
 * @property string management_type
 * @property string phone
 * @property string student_type
 * @property string edu_lavel
 * @property string mpo_status
 */
class All_educational_institution extends Model
{
    use SoftDeletes;

    public $table = 'all_educational_institutions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'id',
        'name',
        'eiin',
        'type',
        'division_id',
        'division',
        'district_id',
        'district',
        'thana',
        'unon',
        'address',
        'post',
        'management_type',
        'phone',
        'student_type',
        'edu_lavel',
        'mpo_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'eiin' => 'integer',
        'type' => 'string',
        'division_id' => 'integer',
        'division' => 'string',
        'district_id' => 'integer',
        'district' => 'string',
        'thana' => 'string',
        'unon' => 'string',
        'address' => 'string',
        'post' => 'string',
        'management_type' => 'string',
        'phone' => 'string',
        'student_type' => 'string',
        'edu_lavel' => 'string',
        'mpo_status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
