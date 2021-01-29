<?php namespace Raxmatilla\Abiturentlar\Models;

use Model;

/**
 * Model
 */
class Magisteratura extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'raxmatilla_abiturentlar_magister';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
