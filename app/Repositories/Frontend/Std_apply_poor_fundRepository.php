<?php

namespace App\Repositories\Frontend;

use App\Models\Frontend\Std_apply_poor_fund;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Std_apply_poor_fundRepository
 * @package App\Repositories\Frontend
 * @version December 23, 2018, 10:04 am UTC
 *
 * @method Std_apply_poor_fund findWithoutFail($id, $columns = ['*'])
 * @method Std_apply_poor_fund find($id, $columns = ['*'])
 * @method Std_apply_poor_fund first($columns = ['*'])
*/
class Std_apply_poor_fundRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userId',
        'first_name',
        'last_name',
        'phone',
        'adress',
        'organize',
        'class',
        'year',
        'gpa_cgpa',
        'father_occupation',
        'monthly_income',
        'description',
        'chirman_certificate',
        'remarks',
        'division',
        'district',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Std_apply_poor_fund::class;
    }
}
