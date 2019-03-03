<?php

namespace App\Repositories;

use App\Models\StudentApplyInnovation;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class StudentApplyInnovationRepository
 * @package App\Repositories
 * @version December 7, 2018, 10:27 am UTC
 *
 * @method StudentApplyInnovation findWithoutFail($id, $columns = ['*'])
 * @method StudentApplyInnovation find($id, $columns = ['*'])
 * @method StudentApplyInnovation first($columns = ['*'])
*/
class StudentApplyInnovationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userId',
        'class',
        'phone',
        'year',
        'innovation_name',
        'innovation_type',
        'description',
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
        return StudentApplyInnovation::class;
    }
}
