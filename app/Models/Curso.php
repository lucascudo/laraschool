<?php

namespace App\Models;

use App\Models\AppBaseModel as Model;

/**
 * Class Curso
 * @package App\Models
 * @version August 6, 2019, 9:15 am -03
 *
 * @property string $titulo
 * @property string $turno
 * @property string $codigo_strix
 * @property string $centro_custo
 */
class Curso extends Model
{
    public $table = 'cursos';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'titulo',
        'turno',
        'codigo_strix',
        'centro_custo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'titulo' => 'string',
        'turno' => 'string',
        'codigo_strix' => 'string',
        'centro_custo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'titulo' => ['required', 'string', 'max:255'],
        'turno' => ['required', 'string', 'max:25'],
        'codigo_strix' => ['required', 'string', 'max:255'],
        'centro_custo' => ['required', 'string', 'max:255'],
    ];
}
