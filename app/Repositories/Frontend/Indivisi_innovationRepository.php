<?php

namespace App\Repositories\Frontend;

use App\Models\Frontend\Indivisi_innovation;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Indivisi_innovationRepository
 * @package App\Repositories\Frontend
 * @version January 6, 2019, 9:07 am UTC
 *
 * @method Indivisi_innovation findWithoutFail($id, $columns = ['*'])
 * @method Indivisi_innovation find($id, $columns = ['*'])
 * @method Indivisi_innovation first($columns = ['*'])
*/
class Indivisi_innovationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userId',
        'first_name',
        'last_name',
        'name',
        'address',
        'phone',
        'gov_patent',
        'related_ministy',
        'criteria',
        'description',
        'advantages',
        'implemention',
        'division',
        'district',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Indivisi_innovation::class;
    }
}
