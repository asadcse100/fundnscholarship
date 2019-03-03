<?php

namespace App\Models\Frontend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Complain
 * @package App\Models\Frontend
 * @version January 25, 2019, 6:51 pm UTC
 *
 * @property integer userId
 * @property string userName
 * @property string email
 * @property string phone
 * @property string issu
 * @property string details
 */
class Complain extends Model
{
    use SoftDeletes;

    public $table = 'complains';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'userId',
        'userName',
        'email',
        'phone',
        'issu',
        'details'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'userId' => 'integer',
        'userName' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'issu' => 'string',
        'details' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];


    
}
