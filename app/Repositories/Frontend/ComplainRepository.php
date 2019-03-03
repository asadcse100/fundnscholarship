<?php

namespace App\Repositories\Frontend;

use App\Models\Frontend\Complain;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ComplainRepository
 * @package App\Repositories\Frontend
 * @version January 25, 2019, 6:51 pm UTC
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
