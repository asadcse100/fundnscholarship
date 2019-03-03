<?php

namespace App\Repositories;

use App\Models\StudentApplyIssue;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class StudentApplyIssueRepository
 * @package App\Repositories
 * @version December 7, 2018, 10:28 am UTC
 *
 * @method StudentApplyIssue findWithoutFail($id, $columns = ['*'])
 * @method StudentApplyIssue find($id, $columns = ['*'])
 * @method StudentApplyIssue first($columns = ['*'])
*/
class StudentApplyIssueRepository extends BaseRepository
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
        'issue_name',
        'issue_type',
        'description',
        'issue_image',
        'video_link',
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
        return StudentApplyIssue::class;
    }
}
