<?php namespace Bishopm\Examening\Models;

use Model;

/**
 * Model
 */
class Video extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'bishopm_examening_videos';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public function scopeTaketwo($query)
    {
        return $query->take(2);
    }
}
