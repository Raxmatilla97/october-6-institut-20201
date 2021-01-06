<?php namespace Raxmatilla\Elonlar\Models;

use Model;

/**
 * Model
 */
class Categoriya extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'raxmatilla_elonlar_category';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
