<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Ministy;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MinistyRepository
 * @package App\Repositories\Backend
 * @version January 19, 2019, 10:09 am UTC
 *
 * @method Ministy findWithoutFail($id, $columns = ['*'])
 * @method Ministy find($id, $columns = ['*'])
 * @method Ministy first($columns = ['*'])
*/
class MinistyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Ministy::class;
    }
}
