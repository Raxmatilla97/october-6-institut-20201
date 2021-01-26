<?php namespace Raxmatilla\Faoliyatlar\Models;

use Model;

/**
 * Model
 */
class EkologiyaCategory extends Model
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
    public $table = 'raxmatilla_faoliyatlar_ekologiya_category';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
