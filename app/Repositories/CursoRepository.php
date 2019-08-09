<?php

namespace App\Repositories;

use App\Models\Curso;
use App\Repositories\BaseRepository;

/**
 * Class CursoRepository
 * @package App\Repositories
 * @version August 6, 2019, 9:15 am -03
*/

class CursoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titulo',
        'turno',
        'codigo_strix',
        'centro_custo'
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
        return Curso::class;
    }
}
