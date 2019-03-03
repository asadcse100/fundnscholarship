<?php

namespace App\Repositories\Frontend;

use App\Models\Frontend\Std_apply_result;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Std_apply_resultRepository
 * @package App\Repositories\Frontend
 * @version December 22, 2018, 8:46 am UTC
 *
 * @method Std_apply_result findWithoutFail($id, $columns = ['*'])
 * @method Std_apply_result find($id, $columns = ['*'])
 * @method Std_apply_result first($columns = ['*'])
*/
class Std_apply_resultRepository extends BaseRepository
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
        'class',
        'year',
        'gpa_cgpa',
        'merit_list',
        'organize',
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
        return Std_apply_result::class;
    }
}
