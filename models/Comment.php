<?php namespace Bishopm\Examening\Models;

use Model;

/**
 * Model
 */
class Comment extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'bishopm_examening_comments';

    public $belongsTo = [
        'user' => 'Rainlab\User\Models\User'
    ];
    
    

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
