<?php

namespace App\Repositories\Backend;

use App\Models\Backend\Indivisi_national;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Indivisi_nationalRepository
 * @package App\Repositories\Backend
 * @version January 6, 2019, 9:03 am UTC
 *
 * @method Indivisi_national findWithoutFail($id, $columns = ['*'])
 * @method Indivisi_national find($id, $columns = ['*'])
 * @method Indivisi_national first($columns = ['*'])
*/
class Indivisi_nationalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userId',
        'name',
        'first_name',
        'last_name',
        'address',
        'phone',
        'criteria',
        'division',
        'description',
        'advantages',
        'implemention',
        'improvement',
        'division',
        'district'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Indivisi_national::class;
    }
}
