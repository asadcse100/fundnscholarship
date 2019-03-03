<?php

namespace App\Models\Frontend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Indivisi_innovation
 * @package App\Models\Frontend
 * @version January 6, 2019, 9:07 am UTC
 *
 * @property string name
 * @property string gov_patent
 * @property string related_ministy
 * @property string criteria
 * @property string description
 * @property string advantages
 * @property string implemention
 */
class Indivisi_innovation extends Model
{
    use SoftDeletes;

    public $table = 'indivisi_innovations';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'userId',
        'first_name',
        'last_name',
        'name',
        'address',
        'phone',
        'gov_patent',
        'related_ministy',
        'criteria',
        'description',
        'advantages',
        'implemention',
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
        'name' => 'string',
        'address' => 'string',
        'phone' => 'string',
        'gov_patent' => 'string',
        'related_ministy' => 'string',
        'criteria' => 'string',
        'description' => 'string',
        'advantages' => 'string',
        'implemention' => 'string',
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
