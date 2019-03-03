<?php

namespace App\Repositories\Frontend;

use App\Models\Frontend\Std_apply_national_issu;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Std_apply_national_issuRepository
 * @package App\Repositories\Frontend
 * @version December 22, 2018, 11:21 am UTC
 *
 * @method Std_apply_national_issu findWithoutFail($id, $columns = ['*'])
 * @method Std_apply_national_issu find($id, $columns = ['*'])
 * @method Std_apply_national_issu first($columns = ['*'])
*/
class Std_apply_national_issuRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userId',
        'first_name',
        'last_name',
        'phone',
        'adress',
        'organize',
        'class',
        'year',
        'issue_name',
        'issue_type',
        'description',
        'issue_image',
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
        return Std_apply_national_issu::class;
    }
}
