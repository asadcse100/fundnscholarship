<?php

namespace App\Models\Frontend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Insti_innovation
 * @package App\Models\Frontend
 * @version January 6, 2019, 9:08 am UTC
 *
 * @property string class
 * @property string year
 * @property string innovation_name
 * @property string innovation_type
 * @property string description
 * @property string video_link
 * @property string remarks
 */
class Insti_innovation extends Model
{
    use SoftDeletes;

    public $table = 'insti_innovations';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'userId',
        'innovation_name',
        'first_name',
        'last_name',
        'address',
        'phone',
        'organize',
        'innovation_type',
        'description',
        'video_link',
        'innovation_type',
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
        'innovation_name' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'phone' => 'string',
        'address' => 'string',
        'organize' => 'string',
        'innovation_type' => 'string',
        'description' => 'string',
        'video_link' => 'string',
        'remarks' => 'string',
        'innovation_type' => 'integer',
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
