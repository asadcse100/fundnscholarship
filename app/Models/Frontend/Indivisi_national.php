<?php

namespace App\Models\Frontend;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Indivisi_national
 * @package App\Models\Frontend
 * @version January 6, 2019, 9:05 am UTC
 *
 * @property string criteria
 * @property string division
 * @property string description
 * @property string advantages
 * @property string implemention
 * @property integer improvement
 */
class Indivisi_national extends Model
{
    use SoftDeletes;

    public $table = 'indivisi_nationals';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'userId',
        'name',
        'first_name',
        'last_name',
        'address',
        'phone',
        'criteria',
        'division',
        'description',
        'advantages',
        'implemention',
        'improvement',
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
        'name' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'address' => 'string',
        'phone' => 'string',
        'criteria' => 'string',
        'division' => 'string',
        'description' => 'string',
        'advantages' => 'string',
        'implemention' => 'string',
        'improvement' => 'integer',
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
