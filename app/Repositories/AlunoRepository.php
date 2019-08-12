<?php

namespace App\Repositories;

use App\Models\Aluno;
use App\Repositories\BaseRepository;

/**
 * Class AlunoRepository
 * @package App\Repositories
 * @version August 12, 2019, 12:31 pm -03
*/

class AlunoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Aluno::class;
    }
}
