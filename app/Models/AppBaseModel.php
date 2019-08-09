<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;

/**
 * Class AppBaseModel
 * @package App\Models
 * @version August 9, 2019, 9:38 am -03
 *
 */
class AppBaseModel extends Model
{
    use SoftDeletes;

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [];

    public static function validate($input, $overrideRules = [])
    {
        return Validator::make($input, array_merge(static::$rules, $overrideRules))->validate();
    }
}
