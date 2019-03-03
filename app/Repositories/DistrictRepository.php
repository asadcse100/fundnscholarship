<?php

namespace App\Repositories;

use App\Models\District;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DistrictRepository
 * @package App\Repositories
 * @version December 7, 2018, 9:33 am UTC
 *
 * @method District findWithoutFail($id, $columns = ['*'])
 * @method District find($id, $columns = ['*'])
 * @method District first($columns = ['*'])
*/
class DistrictRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'division_id',
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return District::class;
    }
}
