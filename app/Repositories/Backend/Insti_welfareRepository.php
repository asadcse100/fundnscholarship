<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Insti_welfare;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Insti_welfareRepository
 * @package App\Repositories\Backend
 * @version January 6, 2019, 8:59 am UTC
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
        'cost',
        'work_field',
        'uno_certificate',
        'documentory',
        'description',
        'division',
        'district',
        'type',
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
