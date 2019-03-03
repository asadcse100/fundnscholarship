<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Welfar_type;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Welfar_typeRepository
 * @package App\Repositories\Backend
 * @version January 18, 2019, 4:12 am UTC
 *
 * @method Welfar_type findWithoutFail($id, $columns = ['*'])
 * @method Welfar_type find($id, $columns = ['*'])
 * @method Welfar_type first($columns = ['*'])
*/
class Welfar_typeRepository extends BaseRepository
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
        return Welfar_type::class;
    }
}
