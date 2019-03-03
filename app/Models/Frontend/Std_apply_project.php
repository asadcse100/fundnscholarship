<?php

namespace App\Models\Frontend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Std_apply_project
 * @package App\Models\Frontend
 * @version January 25, 2019, 6:22 pm UTC
 *
 * @property integer userId
 * @property string first_name
 * @property string last_name
 * @property string phone
 * @property string adress
 * @property string organize
 * @property string class
 * @property string year
 * @property string division
 * @property string district
 * @property string project_name
 * @property string project_rank
 * @property string description
 * @property string remarks
 * @property integer status
 */
class Std_apply_project extends Model
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
        'division',
        'district',
        'project_name',
        'project_rank',
        'description',
        'remarks',
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
        'division' => 'string',
        'district' => 'string',
        'project_name' => 'string',
        'project_rank' => 'string',
        'description' => 'string',
        'remarks' => 'string',
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
