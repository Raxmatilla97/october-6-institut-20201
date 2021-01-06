<?php namespace Raxmatilla\Elonlar\Models;

use Model;

/**
 * Model
 */
class Elonlar extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['title', 'content', 'above_status'];




    /**
     * @var string The database table used by the model.
     */
    public $table = 'raxmatilla_elonlar_table';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

     public function scopePopular($query)
    {
        return $query->take(10);
    }
    public $belongsTo = [
        'categoriya' => 'Raxmatilla\Elonlar\Models\Categoriya'
    ];
   
}
