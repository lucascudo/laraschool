<?php

namespace App\Models;

use App\Models\AppBaseModel as Model;

/**
 * Class Curso
 * @package App\Models
 * @version August 6, 2019, 9:15 am -03
 *
 * @property string $titulo
 */
class Curso extends Model
{
    public $table = 'cursos';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'titulo',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'titulo' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'titulo' => ['required', 'string', 'max:255'],
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function cursos()
    {
        return $this->belongsToMany(\App\Models\Aluno::class, 'alunos_cursos', 'id', 'id');
    }
}
