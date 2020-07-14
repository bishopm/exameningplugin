<?php namespace Bishopm\Examening\Models;

use Model;

/**
 * Model
 */
class Resource extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'bishopm_examening_resources';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
