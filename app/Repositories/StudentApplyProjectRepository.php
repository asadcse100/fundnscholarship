<?php

namespace App\Repositories;

use App\Models\StudentApplyProject;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class StudentApplyProjectRepository
 * @package App\Repositories
 * @version December 7, 2018, 10:27 am UTC
 *
 * @method StudentApplyProject findWithoutFail($id, $columns = ['*'])
 * @method StudentApplyProject find($id, $columns = ['*'])
 * @method StudentApplyProject first($columns = ['*'])
*/
class StudentApplyProjectRepository extends BaseRepository
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
        'project_name',
        'project_rank',
        'description',
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
        return StudentApplyProject::class;
    }
}
