<?php

namespace App\Models\Backend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Insti_welfare
 * @package App\Models\Backend
 * @version January 6, 2019, 8:59 am UTC
 *
 * @property string insti_name
 * @property string type
 * @property float cost
 * @property string work_field
 * @property string uno_certificate
 * @property string documentory
 * @property string description
 */
class Insti_welfare extends Model
{
    use SoftDeletes;

    public $table = 'insti_welfares';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'userId',
        'insti_name',
        'adress',
        'phone',
        'cost',
        'work_field',
        'uno_certificate',
        'documentory',
        'description',
        'division',
        'district',
        'type',
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
        'insti_name' => 'string',
        'adress' => 'string',
        'phone' => 'string',
        'cost' => 'float',
        'work_field' => 'string',
        'uno_certificate' => 'string',
        'documentory' => 'string',
        'description' => 'string',
        'division' => 'integer',
        'district' => 'integer',
        'type' => 'string',
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
