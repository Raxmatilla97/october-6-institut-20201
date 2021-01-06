<?php namespace Raxmatilla\Konfrensiyalar\Models;

use Model;

/**
 * Model
 */
class Konfrensiyalar extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'raxmatilla_konfrensiyalar_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $translatable = ['title', 'soat', 'manzil', 'content', 'kun'];
}
