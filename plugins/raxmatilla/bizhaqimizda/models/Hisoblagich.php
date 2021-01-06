<?php namespace Raxmatilla\BizHaqimizda\Models;

use Model;

/**
 * Model
 */
class Hisoblagich extends Model
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
    public $table = 'raxmatilla_bizhaqimizda_hisoblagich';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    public $translatable = ['hisoblagich', 'text'];

    public $jsonable = ['hisoblagich'];
}
