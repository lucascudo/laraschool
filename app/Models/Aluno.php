<?php

namespace App\Models;

use App\Models\AppBaseModel as Model;

/**
 * Class Aluno
 * @package App\Models
 * @version August 12, 2019, 12:31 pm -03
 *
 * @property \Illuminate\Database\Eloquent\Collection $cursos
 * @property string $nome
 */
class Aluno extends Model
{
    public $table = 'alunos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nome'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function cursos()
    {
        return $this->belongsToMany(\App\Models\Curso::class, 'alunos_cursos', 'id', 'id');
    }
}
