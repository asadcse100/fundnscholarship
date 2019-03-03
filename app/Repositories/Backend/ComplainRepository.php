<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Complain;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ComplainRepository
 * @package App\Repositories\Backend
 * @version January 25, 2019, 7:40 pm UTC
 *
 * @method Complain findWithoutFail($id, $columns = ['*'])
 * @method Complain find($id, $columns = ['*'])
 * @method Complain first($columns = ['*'])
*/
class ComplainRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userId',
        'userName',
        'email',
        'phone',
        'issu',
        'details'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Complain::class;
    }
}
