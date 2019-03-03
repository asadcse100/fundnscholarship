<?php

namespace App\Repositories;

use App\Models\Division;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DivisionRepository
 * @package App\Repositories
 * @version December 7, 2018, 9:13 am UTC
 *
 * @method Division findWithoutFail($id, $columns = ['*'])
 * @method Division find($id, $columns = ['*'])
 * @method Division first($columns = ['*'])
*/
class DivisionRepository extends BaseRepository
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
        return Division::class;
    }
}
