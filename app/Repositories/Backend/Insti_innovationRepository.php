<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Insti_innovation;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Insti_innovationRepository
 * @package App\Repositories\Backend
 * @version December 23, 2018, 12:44 pm UTC
 *
 * @method Insti_innovation findWithoutFail($id, $columns = ['*'])
 * @method Insti_innovation find($id, $columns = ['*'])
 * @method Insti_innovation first($columns = ['*'])
*/
class Insti_innovationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'uaerId',
        'innovation_name',
        'adress',
        'phone',
        'innovation_type',
        'description',
        'video_link',
        'remarks',
        'division',
        'district',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Insti_innovation::class;
    }
}
