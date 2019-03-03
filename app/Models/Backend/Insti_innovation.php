<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Insti_innovation
 * @package App\Models\Backend
 * @version December 23, 2018, 12:44 pm UTC
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
        'adress',
        'phone',
        'description',
        'video_link',
        'remarks',
        'innovation_type',
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
        'adress' => 'string',
        'phone' => 'string',
        'description' => 'string',
        'video_link' => 'string',
        'remarks' => 'string',
        'division' => 'integer',
        'district' => 'integer',
        'innovation_type' => 'integer',
        'status'=> 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
