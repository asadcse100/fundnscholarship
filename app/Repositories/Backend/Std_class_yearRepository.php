<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Std_class_year;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Std_class_yearRepository
 * @package App\Repositories\Backend
 * @version January 15, 2019, 6:21 pm UTC
 *
 * @method Std_class_year findWithoutFail($id, $columns = ['*'])
 * @method Std_class_year find($id, $columns = ['*'])
 * @method Std_class_year first($columns = ['*'])
*/
class Std_class_yearRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'year'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Std_class_year::class;
    }
}
