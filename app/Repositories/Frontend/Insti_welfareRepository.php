<?php

namespace App\Repositories\Frontend;

use App\Models\Frontend\Insti_welfare;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Insti_welfareRepository
 * @package App\Repositories\Frontend
 * @version January 6, 2019, 9:16 am UTC
 *
 * @method Insti_welfare findWithoutFail($id, $columns = ['*'])
 * @method Insti_welfare find($id, $columns = ['*'])
 * @method Insti_welfare first($columns = ['*'])
*/
class Insti_welfareRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userId',
        'insti_name',
        'adress',
        'phone',
        'division',
        'district',
        'type',
        'cost',
        'work_field',
        'uno_certificate',
        'documentory',
        'description',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Insti_welfare::class;
    }
}
