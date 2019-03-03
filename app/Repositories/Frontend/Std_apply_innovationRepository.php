<?php

namespace App\Repositories\Frontend;

use App\Models\Frontend\Std_apply_innovation;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Std_apply_innovationRepository
 * @package App\Repositories\Frontend
 * @version December 23, 2018, 9:54 am UTC
 *
 * @method Std_apply_innovation findWithoutFail($id, $columns = ['*'])
 * @method Std_apply_innovation find($id, $columns = ['*'])
 * @method Std_apply_innovation first($columns = ['*'])
*/
class Std_apply_innovationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userId',
        'first_name',
        'last_name',
        'adress',
        'phone',
        'organize',
        'class',
        'year',
        'innovation_name',
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
        return Std_apply_innovation::class;
    }
}
