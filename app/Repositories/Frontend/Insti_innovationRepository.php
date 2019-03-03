<?php

namespace App\Repositories\Frontend;

use App\Models\Frontend\Insti_innovation;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Insti_innovationRepository
 * @package App\Repositories\Frontend
 * @version January 6, 2019, 9:08 am UTC
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
        'userId',
        'innovation_name',
        'first_name',
        'last_name',
        'address',
        'phone',
        'organize',
        'innovation_type',
        'description',
        'video_link',
        'remarks',
        'innovation_type',
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
