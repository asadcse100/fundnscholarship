<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Innovation_type;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Innovation_typeRepository
 * @package App\Repositories\Backend
 * @version January 18, 2019, 4:12 am UTC
 *
 * @method Innovation_type findWithoutFail($id, $columns = ['*'])
 * @method Innovation_type find($id, $columns = ['*'])
 * @method Innovation_type first($columns = ['*'])
*/
class Innovation_typeRepository extends BaseRepository
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
        return Innovation_type::class;
    }
}
