<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class StudentApplyProject
 * @package App\Models
 * @version December 7, 2018, 10:27 am UTC
 *
 * @property string class
 * @property string year
 * @property string project_name
 * @property string project_rank
 * @property string description
 * @property string remarks
 */
class StudentApplyProject extends Model
{
    use SoftDeletes;

    public $table = 'std_apply_projects';
    
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
        'project_name',
        'project_rank',
        'description',
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
        'project_name' => 'string',
        'project_rank' => 'string',
        'description' => 'string',
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
