<?php

namespace App\Repositories;

use App\Models\StudentApplyPoorFund;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class StudentApplyPoorFundRepository
 * @package App\Repositories
 * @version December 7, 2018, 10:29 am UTC
 *
 * @method StudentApplyPoorFund findWithoutFail($id, $columns = ['*'])
 * @method StudentApplyPoorFund find($id, $columns = ['*'])
 * @method StudentApplyPoorFund first($columns = ['*'])
*/
class StudentApplyPoorFundRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userId',
        'class',
        'first_name',
        'last_name',
        'phone',
        'adress',
        'organize',
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
        return StudentApplyPoorFund::class;
    }
}
