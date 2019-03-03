<?php

namespace App\Repositories\Frontend;

use App\Models\Frontend\Std_apply_project;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Std_apply_projectRepository
 * @package App\Repositories\Frontend
 * @version January 25, 2019, 6:22 pm UTC
 *
 * @method Std_apply_project findWithoutFail($id, $columns = ['*'])
 * @method Std_apply_project find($id, $columns = ['*'])
 * @method Std_apply_project first($columns = ['*'])
*/
class Std_apply_projectRepository extends BaseRepository
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
        'division',
        'district',
        'project_name',
        'project_rank',
        'description',
        'remarks',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Std_apply_project::class;
    }
}
