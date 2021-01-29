<?php namespace Raxmatilla\Abiturentlar\Models;

use Model;

/**
 * Model
 */
class Bakalvriant extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['title', 'content'];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'raxmatilla_abiturentlar_bakalavr';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
