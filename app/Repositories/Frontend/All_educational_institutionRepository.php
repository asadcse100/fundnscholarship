<?php

namespace App\Repositories\Frontend;

use App\Models\Frontend\All_educational_institution;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class All_educational_institutionRepository
 * @package App\Repositories\Frontend
 * @version January 25, 2019, 8:31 pm UTC
 *
 * @method All_educational_institution findWithoutFail($id, $columns = ['*'])
 * @method All_educational_institution find($id, $columns = ['*'])
 * @method All_educational_institution first($columns = ['*'])
*/
class All_educational_institutionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'name',
        'eiin',
        'type',
        'division_id',
        'division',
        'district_id',
        'district',
        'thana',
        'unon',
        'address',
        'post',
        'management_type',
        'phone',
        'student_type',
        'edu_lavel',
        'mpo_status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return All_educational_institution::class;
    }
}
