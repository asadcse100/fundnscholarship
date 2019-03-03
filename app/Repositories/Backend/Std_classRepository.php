<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Std_class;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Std_classRepository
 * @package App\Repositories\Backend
 * @version January 15, 2019, 6:20 pm UTC
 *
 * @method Std_class findWithoutFail($id, $columns = ['*'])
 * @method Std_class find($id, $columns = ['*'])
 * @method Std_class first($columns = ['*'])
*/
class Std_classRepository extends BaseRepository
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
        return Std_class::class;
    }
}
