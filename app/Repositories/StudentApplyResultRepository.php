<?php

namespace App\Repositories;

use App\Models\StudentApplyResult;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class StudentApplyResultRepository
 * @package App\Repositories
 * @version December 7, 2018, 10:26 am UTC
 *
 * @method StudentApplyResult findWithoutFail($id, $columns = ['*'])
 * @method StudentApplyResult find($id, $columns = ['*'])
 * @method StudentApplyResult first($columns = ['*'])
*/
class StudentApplyResultRepository extends BaseRepository
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
        'merit_list',
        'result_image',
        'division',
        'district',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return StudentApplyResult::class;
    }
}
