<?php namespace Raxmatilla\BizHaqimizda\Models;

use Model;

/**
 * Model
 */
class BizHaqimizda extends Model
{

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['h2', 'h5', 'text', 'qabul_text', 'list_key_chap', 'list_key_ong'];


    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'raxmatilla_bizhaqimizda_item';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $jsonable = ['list_key_chap', 'list_key_ong'];


  
}
